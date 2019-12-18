<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{
    protected $table = 'organizations';
    protected $fillable = ['name', 'tracking_id', 'url', 'location', 'short_description'];
}
