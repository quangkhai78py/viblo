<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluates extends Model
{
    protected $table = 'evaluates';
    protected $fillable = ['score', 'reputation', 'user_id', 'post_id', 'question_id', 'answer_id'];
}
