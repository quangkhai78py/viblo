<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follows extends Model
{
    protected $table = 'follows';
    protected $fillable = ['user_id_following', 'user_id_follower','organization_user_id_follower', 'follow_unfollow'];
}
