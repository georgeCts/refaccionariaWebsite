<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Privilege;
use DB;
use Auth;

class PrivilegeCategory extends Model
{
    protected $table = "privileges_categories";
    protected $fillable = ['privilege_category', 'menu_order', 'menu_icon'];

    /* RELATIONSHIP - INICIO */
    public function privileges() {
        return $this->hasMany(Privilege::class, 'id', 'privilege_category_id');
    }
    /* RELATIONSHIP - FIN */
}
