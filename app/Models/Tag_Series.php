<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag_Series extends Model
{
    protected $table = 'tag_series';
    protected $fillable = ['series_id', 'tag_id'];
}
