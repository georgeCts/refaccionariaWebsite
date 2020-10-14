<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrestigeBrand extends Model
{
    protected $table    = 'prestige_brands';
    protected $fillable = ['name', 'status'];
}
