<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','namestore','address','phone','picture','status_store','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    const ADMIN_TYPE = 1;
    const USER_TYPE = 0;
    const SALE_TYPE = 2;
    public function isAdmin()
    {
        return $this->type === self::ADMIN_TYPE;
    }

    public function Finance2(){
        return $this->hasMany('App\Models\Finance2', 'user_id'); 
    }
}
