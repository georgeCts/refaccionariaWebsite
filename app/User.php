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
    protected $fillable = ['user_type_id', 'name', 'last_name', 'email', 'profile_pic', 'user', 'password', 'access_numb', 'last_access', 'created_user_id', 'created_at', 'updated_user_id', 'updated_at', 'deleted'];
    protected $hidden   = ['password', 'remember_token'];

    /* RELATIONSHIPS - INICIO */
    public function userType() {
        return $this->belongsTo('App\UserType', 'user_type_id', 'id');
    }

    public function createdUser() {
        return $this->belongsTo('App\User', 'id', 'created_user_id');
    }

    public function updatedUser() {
        return $this->belongsTo('App\User', 'id', 'updated_user_id');
    }

    public function privileges() {
        return $this->belongsToMany('App\Privilege', 'users_privileges', 'user_id', 'privilege_id');
    }
    /* RELATIONSHIPS - FIN */

    public function save(array $options = array()) {
        $this['updated_user_id'] = Auth::user()->id;
        $this['updated_at'] = date('Y-m-d H:i:s');

        return parent::save($options);
    }

    public function create(array $options = array()) {
        if( $this['id'] === null) {
            $this['created_user_id'] = (Auth::check())? Auth::user()->id : 1;
            $this['created_at'] = date('Y-m-d H:i:s');
            $this['updated_user_id'] = (Auth::check())? Auth::user()->id : 1;
            $this['updated_at'] = date('Y-m-d H:i:s');
            return parent::save($options);
        } else {
            return false;
        }
    }

    public function update(array $attributes = array(), array $options = array()) {
        return save($options);
    }

    public function delete() {
        if( $this['deleted'] == 0) {
            $this['updated_pk_user'] = Auth::user()->pk_user;
            $this['updated_at'] = date('Y-m-d H:i:s');
            $this['deleted'] = 1;
            return save();
        } else {
            return false;
        } 
    }
}
