<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $fillable = ['id', 'title', 'body', 'url_redirect', 'status', 'file', 'deleted'];
}
