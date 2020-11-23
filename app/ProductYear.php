<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductYear extends Model
{
    protected $table    = 'products_years';
    protected $fillable = ['name', 'deleted'];
}
