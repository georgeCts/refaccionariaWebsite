<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table    = 'locations';
    protected $fillable = ['name', 'address', 'latitude', 'longitude', 'phone', 'whatsapp1', 'whatsapp2', 'more_info', 'deleted'];
}
