<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\PrivilegeCategory;
use App\Privilege;

use DB;
use Auth;

class UserPrivilege extends Model
{
    protected $table    = "users_privileges";
    protected $fillable = ['user_id', 'privilege_', 'created_user_id', 'created_at'];

    public function create(array $options = array()) {
        $this['created_user_id'] = Auth::user()->id;
        $this['created_at'] = date('Y-m-d H:i:s');
        return save($options);
    }

    public static function getPrivilegesMenu(User $objUser) {
        $return = array();

        $lstPrivilegesCategories = PrivilegeCategory::orderBy('menu_order', 'asc')->orderBy('id', 'asc')->get();

        foreach ($lstPrivilegesCategories as $itemPrivilegeCategory) {
            $lstPrivileges = $objUser->privileges
                    ->where('privilege_category_id', $itemPrivilegeCategory->id)
                    ->where('menu', '=', 1)
                    ->where('active', '=', 1)
                    ->sortBy('menu_order');
            if(sizeof($lstPrivileges) > 0 ) {
                array_push($return, array(
                    'category'         => $itemPrivilegeCategory,
                    'privileges'       => $lstPrivileges
                ));
            }
        }

        return $return;
    }
}
