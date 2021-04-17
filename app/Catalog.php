<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table    = 'catalogs';
    protected $fillable = ['category_id', 'brand_id', 'name', 'file', 'pdf', 'deleted'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
}
