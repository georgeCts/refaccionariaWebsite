<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use DB;

class ProductsController extends Controller
{
    public function index() {
        return View::make('contents.Productos');

    }

    public function find(Request $request) {
        $query = DB::table('products');

        $query->where('deleted', false);

        if(!is_null($request->search)) {
            $query->where(function($query2) use ($request) {
                $query2->orWhere("name","like","%". $request->search ."%");
                $query2->orWhere("description","like","%". $request->search ."%");
                $query2->orWhere("part_number","like","%". $request->search ."%");
            });
        }

        $query->orderBy("name", 'DESC');
        $data = $query->paginate(12);
        
        return response()->json($data, 200);
    }
}
