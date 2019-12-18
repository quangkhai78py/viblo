<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_organization extends Model
{
    protected $table = 'user_organization';
    protected $fillable = ['user_id', 'organization_id'];
}
