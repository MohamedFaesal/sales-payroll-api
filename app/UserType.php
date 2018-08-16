<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * UserType Class represent employee types
 * @package App
 * @author Mohamed Faesal <mohamed.feasal@gmail.com>
 */
class UserType extends Model
{
    /**
     * @var array The attributes that are mass assignable
     */
    protected $fillable = ['type'];
}
