<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductEngine extends Model
{
    protected $table    = 'products_engines';
    protected $fillable = ['name', 'deleted'];
}
