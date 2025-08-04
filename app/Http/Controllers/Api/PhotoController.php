<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{
    public function upload(Request $request)
    {

        $request->validate([
            'photo_type_code'   => 'required|string',
            'photo'             => 'required',
            'photo.*'           => 'image|max:10240', 
            'photo_author_id'   => 'required|integer',
            'photo_comment'     => 'nullable|string',
            'photo_latitude'    => 'nullable|numeric',
            'photo_longitude'   => 'nullable|numeric',
        ]);

        $photos = [];

        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $file) {

                $extension = $file->getClientOriginalExtension();

                // example: photo_20240719_abcdef12.jpg
                $filename = 'photo_' . date('YmdHis') . '.' . $extension;

                $image = Image::make($file);
                if ($image->width() > 1024) {
                    $image->resize(1024, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                }

                $path = 'public/photos/' . $filename;
                Storage::put($path, (string) $image->encode());

                $photo = Photo::create([
                    'photo_type_code'   => $request->photo_type_code,
                    'photo_local_path'  => $path,
                    'photo_filename'    => $filename,
                    'photo_author_id'   => $request->photo_author_id,
                    'photo_comment'     => $request->photo_comment,
                    'photo_post_date'   => now(),
                    'photo_alter_date'  => now(),
                    'photo_view_status' => 1,
                    'photo_latitude'    => $request->photo_latitude,
                    'photo_longitude'   => $request->photo_longitude,
                ]);
                $photos[] = $photo;
            }

            return response()->json([
                'status' => 'success',
                'photos' => $photos,
            ], 201);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'No photos uploaded'
        ], 400);
    }

    public function savePaths(Request $request)
    {

        $validated = $request->validate([
            'photo_type_code'    => 'required|string',
            'photo_paths'        => 'required|array',
            'photo_paths.*'      => 'required|string|max:255', 
            'photo_author_id'    => 'required|integer',
            'photo_comment'      => 'nullable|string',
            'photo_latitude'     => 'nullable|numeric',
            'photo_longitude'    => 'nullable|numeric',
        ]);

        $photos = [];

        foreach ($validated['photo_paths'] as $path) {

            $filename = basename($path);

            $photo = Photo::create([
                'photo_type_code'   => $validated['photo_type_code'],
                'photo_local_path'  => $path, 
                'photo_filename'    => $filename,
                'photo_author_id'   => $validated['photo_author_id'],
                'photo_comment'     => $validated['photo_comment'] ?? null,
                'photo_post_date'   => now(),
                'photo_alter_date'  => now(),
                'photo_view_status' => 1,
                'photo_latitude'    => $validated['photo_latitude'] ?? null,
                'photo_longitude'   => $validated['photo_longitude'] ?? null,
            ]);
            $photos[] = $photo;
        }

        return response()->json([
            'status' => 'success',
            'photos' => $photos
        ], 201);
    }

}
