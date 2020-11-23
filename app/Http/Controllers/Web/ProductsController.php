<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
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

        if(!is_null($request->brand))
            $query->where('brand_id', $request->brand);

        if(!is_null($request->model))
            $query->where('brand_model_id', $request->model);

        if(!is_null($request->year))
            $query->where('product_year_id', $request->year);

        if(!is_null($request->engine))
            $query->where('product_engine_id', $request->engine);

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

    public function getFilters() {
        $brands = Product::select('brand')->distinct()->get();
        $models = Product::select('model')->distinct()->get();
        $years  = Product::select('year')->distinct()->get();
        $engine = Product::select('engine')->distinct()->get();

        return response()->json([
            "brands"    => $brands,
            "models"    => $models,
            "years"     => $years,
            "engine"    => $engine,
        ], 200);
    }
}
