<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    protected $table    = 'brands_models';
    protected $fillable = ['brand_id', 'name', 'created_at', 'updated_at', 'deleted'];

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
}
