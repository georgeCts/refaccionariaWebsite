<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Product;
use DB;
use Excel;
use DateTime;
use Exception;

class ImportProduct {
    protected $error = array();

    public function __construct(){
       
    }
    
    public function importProducts($request){
        Excel::load($request->file('file'), function ($reader) {
            $results = $reader->get()->toArray();

            foreach ($results as $value) {
                $products = $this->createProduct($value);
                if($products !== true)
                    array_push($this->error, $products);
            }
        });

        return array("response" => true, "errors" => $this->error);
    }

    private function createProduct($excel) {
        $response = false;

        $objProduct = Product::where('part_number', $excel["numero_parte"])->where('deleted', false)->first();
        if($objProduct == null) {
            try {
                //dd($excel);
                $response = DB::table("products")->insert([
                    'name'              => $excel["nombre"] == null ? '' : (string)$excel["nombre"],
                    'description'       => (string)$excel["descripcion"],
                    'part_number'       => (string)$excel["numero_parte"],
                    'model'             => $excel["modelo"] == null ? '' : (string)$excel["modelo"],
                    'brand'             => $excel["marca"],
                    'year'              => $excel["ano"] == null ? '' : (string)$excel["ano"],
                    'engine'            => $excel["motor"] == null ? '' : (string)$excel["motor"],
                    'created_at'        => now(),
                    'updated_at'        => now(),
                    'deleted'           => false
                ]);
    
                return $response;
            }
            catch(Exception $ex) {
                array_push($excel, "Algun dato ingresado es invalido, favor de guardar el producto manualmente.");
                return $excel;
            }
        } else {
            array_push($excel, "Este numero de parte ya se encuentra registrado en otro producto.");
            return $excel;
        }

        return $response;
    }
}
