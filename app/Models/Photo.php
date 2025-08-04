<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Photo extends Model
{
    use HasFactory;

    protected $primaryKey = 'photo_id';

    protected $fillable = [
        'photoable_id', 'photoable_type', 'photo_author_id', 'photo_local_path',
        'photo_filename', 'photo_comment', 'photo_type_code', 'photo_view_status',
        'photo_latitude', 'photo_longitude',
    ];

    protected $casts = [
        'photo_view_status' => 'boolean',
        'photo_latitude' => 'decimal:8',
        'photo_longitude' => 'decimal:8',
    ];

    /**
    * Get the parent model that this photo belongs to (Post, User, etc.).
     */
    public function photoable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
    * Get the user who uploaded this photo.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'photo_author_id');
    }
}
