<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    
    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'website_name',
        'website_url',
        'birthday',
        'sex',
        'profile_text',
    ];

    protected $casts = [
        'birthday' => 'date',
    ];

    protected $hidden = [
        'id',
        'user_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the user that owns the profile.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}