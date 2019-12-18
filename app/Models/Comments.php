<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['content_comment', 'user_id', 'post_id','comment_children_id', 'question_id','answer_id'];
}
