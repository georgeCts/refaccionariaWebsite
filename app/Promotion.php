<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table    = 'promotions';
    protected $fillable = ['title', 'body', 'status', 'file', 'is_promotion', 'deleted'];
}
