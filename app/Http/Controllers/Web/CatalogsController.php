<?php

namespace App\Http\Controllers\Web;

use View;
use App\Catalog;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogsController extends Controller
{
    public function index($slug) {
        $return = redirect('/');
        $objCategory = Category::where('slug', $slug)->where('deleted', 0)->first();

        if($objCategory != null) {
            $lstCatalogs = Catalog::where('deleted', false)->where('category_id', $objCategory->id)->orderBy('created_at', 'DESC')->get();
            $return = View::make('contents.Catalogos', ['objCategory' => $objCategory, 'lstCatalogs' => $lstCatalogs]);
        }

        return $return;
    }
}
