<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class Brand extends Model
{
    protected $table    = 'brands';
    protected $fillable = ['name', 'created_user_id', 'created_at', 'updated_user_id', 'updated_at', 'deleted'];

    /* RELATIONSHIPS - BEGIN */
    public function createdUser() {
        return $this->belongsTo(User::class, 'id', 'created_user_id');
    }

    public function updatedUser() {
        return $this->hasOne(User::class, 'id', 'updated_user_id');
    }
    /* RELATIONSHIPS - END */

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
        return parent::save($options);
    }
}
