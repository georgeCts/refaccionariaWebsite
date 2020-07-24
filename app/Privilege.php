<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PrivilegeCategory;
use DB;
use Auth;

class Privilege extends Model
{
    protected $table    = "privileges";
    public $timestamps  = false;

    protected $fillable = ['privilege_category_id', 'parent_privilege_id', 'privilege', 'tag', 'menu', 'menu_order', 'menu_url', 'active'];


    /* RELATIONSHIPS - INICIO */
    public function privilegeCategory() {
        return $this->belongsTo(PrivilegeCategory::class, 'id', 'privilege_category_id');
    }
    /* RELATIONSHIPS - FIN */

    /* public function save(array $options = array()) {
        $this['updated_pk_user'] = Auth::user()->pk_user;
        $this['updated_at'] = date('Y-m-d H:i:s');

        return parent::save($options);
    }

    public function create(array $options = array()) {
        if( $this['pk_privilegio'] === null) {
            $this['created_pk_user'] = Auth::user()->pk_user;
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
            $this['updated_pk_user'] = Auth::user()->pk_user;
            $this['updated_at'] = date('Y-m-d H:i:s');
            $this['deleted'] = 1;
            return save();
        } else {
            return false;
        } 
    } */
}
