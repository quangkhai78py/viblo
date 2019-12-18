<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'email_verified_at', 'username', 'password', 'avatar', 'remember_token'];
}
