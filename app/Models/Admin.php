<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    //
    use Notifiable;

//     @var array

protected $fillable  = [
    'name', 'email', 'password'
];
protected $hidden  = [
    'password', 'remember_token',
];
protected $casts = [
    'email_verified_at' => 'datetime',
];

}

