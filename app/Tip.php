<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    protected $table    = 'tips';
    protected $fillable = ['title', 'body', 'file', 'status', 'deleted'];
}
