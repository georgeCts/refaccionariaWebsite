<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class User extends Authenticatable
{
    use Notifiable;
    protected $table    = 'users';
    protected $fillable = ['name', 'last_name', 'email', 'user', 'password', 'last_access', 'deleted'];
    protected $hidden   = ['password', 'remember_token'];
}
