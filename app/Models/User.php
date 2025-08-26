<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use App\Notifications\VerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable,
        HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key for the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * Indicates if the model should be timestamped.
     * This table does not have created_at and updated_at columns.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_login',
        'user_pass',
        'user_nicename',
        'user_url',
        'display_name',
    ];

    /**
     * The attributes that should be hidden for arrays or JSON.
     *
     * @var array
     */
    protected $hidden = [
        'user_pass',
        'user_activation_key',
        'user_email'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_registered' => 'datetime',
    ];

    /**
     * Override method to get the password for authentication.
     * By default, Laravel looks for the 'password' column, but our table uses 'user_pass'.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->user_pass;
    }

    /**
     * Override method to get the email for notifications.
     * This ensures that notifications (ResetPassword, VerifyEmail)
     * are sent to the correct address in the 'user_email' column.
     *
     * @param \Illuminate\Notifications\Notification $notification
     * @return string
     */
    public function routeNotificationForMail($notification)
    {
        return $this->user_email;
    }

    /**
     *
     * @return string
     */
    public function getEmailForVerification()
    {
        return $this->user_email;
    }

    /**
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Gửi thông báo xác thực email.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usermeta()
    {
        return $this->hasMany(UserMeta::class, 'user_id', 'ID');
    }

    /**
     *
     * @param string $key
     * @return mixed|null
     */
    public function getMetaValue(string $key)
    {
        $meta = $this->usermeta()->where('meta_key', $key)->first();
        return $meta ? $meta->meta_value : null;
    }
}
