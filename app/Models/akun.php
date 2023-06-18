<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\akun as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class akun extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "akun";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'namaAkun',
        'emailAkun',
        'passwordAkun',
        'nomerHPAkun',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'passwordAkun',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'passwordAkun' => 'hashed',
    ];

    static public function getEmailSingle($emailAkun)
    {
        return akun::where('emailAkun', '=', $emailAkun)->first();
    }

    static public function getTokenSingle($remember_token)
    {
        return akun::where('remember_token', '=', $remember_token)->first();
    }
    
}
