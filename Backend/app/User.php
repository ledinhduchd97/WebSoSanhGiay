<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'email',
        'user_level',
        'user_status',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_password', 'user_remember_token','user_email_verified_at'
    ];
    public function brand()
    {
        return $this->hasMany('App\Tbl_brand');
    }
    public function product()
    {
        return $this->hasMany('App\Tbl_product');
    }

}
