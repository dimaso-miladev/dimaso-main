<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use App\Notifications\VerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class User extends Authenticatable implements JWTSubject //, MustVerifyEmail
{
    use Notifiable,
        HasFactory;

    #Model Relationship

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    
    public function avatar(): MorphOne
    {
        return $this->morphOne(Photo::class, 'photoable')->where('photo_type_code', 'A');
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'id',
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',
        'email'
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    

    /**
     * Get the oauth providers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function oauthProviders()
    {
        return $this->hasMany(OAuthProvider::class);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    /**
     * @return int
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
