<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/products', 'Web\ProductsController@find');
Route::get('/products/filters', 'Web\ProductsController@getFilters');

Route::get('/products/loadCollections', 'Admin\ProductsController@loadCollection');
Route::get('/products/loadModels', 'Admin\ProductsController@loadModels');
Route::get('/products/loadProduct', 'Admin\ProductsController@loadProduct');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
