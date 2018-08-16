<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * User Class represent employee will have salary & some data retrieval
 * @package App
 * @author Mohamed Faesal <mohamed.feasal@gmail.com>
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * @var array The attributes that are mass assignable
     */
    protected $fillable = [
        'name', 'email', 'password', 'salary', 'bonus-percentage', 'user-type-id'
    ];

    /**
     * @var array The attributes that should be hidden for arrays.
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * relate user with user type
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userType()
    {
        return $this->hasOne('App\UserType');
    }
}
