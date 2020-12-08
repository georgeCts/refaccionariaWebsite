<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table    = 'products';
    protected $fillable = ['brand_id', 'brand_model_id', 'product_year_id', 'product_engine_id', 'name', 'description', 'part_number', 'model', 'file', 'deleted'];

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function model() {
        return $this->belongsTo(BrandModel::class);
    }

    public function year() {
        return $this->belongsTo(ProductYear::class);
    }

    public function engine() {
        return $this->belongsTo(ProductEngine::class);
    }
}
