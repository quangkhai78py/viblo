<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';
    protected $fillable = ['title', 'content_question', 'user_id'];
}
