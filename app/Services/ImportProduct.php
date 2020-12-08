<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\BrandModel;
use App\ProductEngine;
use App\ProductYear;
use DB;
use Excel;
use DateTime;
use Exception;

class ImportProduct {
    protected $error = array();
    protected $brand_final;
    protected $model_final;
    protected $year_final;
    protected $motor_final;

    public function __construct(){
        $this->brand_final  = null;
        $this->model_final  = null;
        $this->year_final   = null;
        $this->motor_final  = null;
    }
    
    public function importProducts($request) {
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

    private function validateInfo($excel) {
        $this->brand_final  = null;
        $this->model_final  = null;
        $this->year_final   = null;
        $this->motor_final  = null;

        $objBrand = Brand::where('name', trim(strtoupper($excel["marca"]), " "))->where('deleted', false)->first();
        if(!is_null($objBrand))
            $this->brand_final = $objBrand->id;

        $objModel = BrandModel::where('name', trim(strtoupper($excel["modelo"]), " "))->where('deleted', false)->first();
        if(!is_null($objModel))
            $this->model_final = $objModel->id;

        $objYear = ProductYear::where('year', trim($excel["ano"], " "))->where('deleted', false)->first();
        if(!is_null($objYear))
            $this->year_final = $objYear->id;

        $objEngine = ProductEngine::where('engine', trim(strtoupper($excel["motor"]), " "))->where('deleted', false)->first();
        if(!is_null($objEngine))
            $this->motor_final = $objEngine->id;
    }

    private function createProduct($excel) {
        $response = false;

        if((string)$excel["nombre"] != "" && (string)$excel["numero_parte"] != "") {
            $objProduct = Product::where('part_number', $excel["numero_parte"])->where('deleted', false)->first();
            if($objProduct == null) {
                try {
                    $this->validateInfo($excel);
    
                    $response = DB::table("products")->insert([
                        'name'                  => $excel["nombre"] == null ? '' : (string)$excel["nombre"],
                        'description'           => (string)$excel["descripcion"],
                        'part_number'           => (string)$excel["numero_parte"],
                        'brand_id'              => $this->brand_final == null ? null : $this->brand_final,
                        'brand_model_id'        => $this->model_final == null ? null : $this->model_final,
                        'product_year_id'       => $this->year_final == null ? null : $this->year_final,
                        'product_engine_id'     => $this->motor_final == null ? null : $this->motor_final,
                        'created_at'            => now(),
                        'updated_at'            => now(),
                        'deleted'               => false
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
        } else {
            array_push($excel, "El numero de parte o el nombre del producto se encuentran vacíos.");
            return $excel;
        }

        return $response;
    }
}
