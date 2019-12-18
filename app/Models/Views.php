<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
    protected $table = 'views';
    protected $fillable = ['view', 'post_id', 'question_id'];
}
