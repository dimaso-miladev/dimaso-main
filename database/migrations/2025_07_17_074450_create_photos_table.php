<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('photos', function (Blueprint $table) {
            $table->id('photo_id');
            $table->morphs('photoable');
            $table->foreignId('photo_author_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('photo_local_path', 255);
            $table->string('photo_filename', 255);
            $table->mediumText('photo_comment')->nullable();
            $table->char('photo_type_code', 1)->nullable()->comment('A: Avatar, P: Post Photo, etc.');
            $table->boolean('photo_view_status')->default(true);
            $table->decimal('photo_latitude', 10, 8)->nullable();
            $table->decimal('photo_longitude', 11, 8)->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('photos');
    }
};
