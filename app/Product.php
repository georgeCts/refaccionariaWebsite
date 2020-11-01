<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table    = 'products';
    protected $fillable = ['brand_id', 'name', 'description', 'part_number', 'model', 'brand', 'year', 'engine', 'file', 'deleted'];
}
