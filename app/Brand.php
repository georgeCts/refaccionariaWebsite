<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table    = 'brands';
    protected $fillable = ['name', 'created_at', 'updated_at', 'deleted'];

    public function models() {
        return $this->hasMany(BrandModel::class);
    }
}
