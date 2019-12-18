<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $table = 'answers';
    protected $fillable = ['content_answer', 'question_id', 'user_id'];
}
