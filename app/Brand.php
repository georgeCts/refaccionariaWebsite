<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class Brand extends Model
{
    protected $table    = 'brands';
    protected $fillable = ['name', 'created_user_id', 'created_at', 'updated_user_id', 'updated_at', 'deleted'];
}
