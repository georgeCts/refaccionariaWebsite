<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class UserType extends Model
{
    protected $table    = "users_types";
    protected $fillable = ['id', 'user_type', 'description', 'created_user_id', 'created_at', 'updated_user_id', 'updated_at', 'deleted'];

    /* RELATIONSHIP - INICIO */
    public function users() {
        return $this->hasMany('App\User', 'id', 'user_type_id');
    }
    /* RELATIONSHIP - FIN */

    public function save(array $options = array()) {
        $this['updated_user_id'] = Auth::user()->id;
        $this['updated_at'] = date('Y-m-d H:i:s');

        return parent::save($options);
    }

    public function create(array $options = array()) {
        if( $this['id'] === null) {
            $this['created_user_id'] = Auth::user()->id;
            $this['created_at'] = date('Y-m-d H:i:s');
            return save($options);
        } else {
            return false;
        }
    }

    public function update(array $attributes = array(), array $options = array()) {
        return save($options);
    }

    public function delete() {
        if( $this['deleted'] == 0) {
            $this['updated_user_id'] = Auth::user()->pk_user;
            $this['updated_at'] = date('Y-m-d H:i:s');
            $this['deleted'] = 1;
            return save();
        } else {
            return false;
        } 
    }
}
