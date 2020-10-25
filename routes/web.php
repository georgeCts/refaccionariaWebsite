<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Web\HomeController@index');
Route::get('/nosotros', function () {
    return view('contents.Nosotros');
});
Route::get('/promociones', 'Web\PromotionsController@index');
Route::get('/productos', 'Web\ProductsController@index');
Route::get('/expert-tips', 'Web\ExpertTipsController@index');
Route::get('/bolsa-trabajo', 'Web\JobsController@index');
Route::get('/contacto', 'Web\ContactController@index');

Route::get('/login-panel', 'Admin\LoginController@index');
Route::post('/login-panel', ['as' => 'login-panel', 'uses' => 'Admin\LoginController@access']);
Route::get('/logout-panel', 'Admin\LoginController@logout');

Route::group([  'prefix'    => 'panel',
                'middleware'=> 'panel.auth'], function() {
    
    //DASHBOARD
    Route::get('/', 'Admin\PanelController@index');

    //PRODUCTOS
    Route::get('productos', 'Admin\ProductsController@index');
    Route::get('productos/producto-crear', 'Admin\ProductsController@create');
    Route::post('productos/producto-crear', ['as' => 'new-product', 'uses' => 'Admin\ProductsController@store']);

    Route::get('productos/producto-editar/{id}', 'Admin\ProductsController@edit');
    Route::put('productos/producto-editar', ['as' => 'update-product', 'uses' => 'Admin\ProductsController@update']);

    //SLIDERS
    Route::get('sliders', 'Admin\SlidersController@index');
    Route::get('sliders/slider-crear', 'Admin\SlidersController@create');
    Route::post('sliders/slider-crear', ['as' => 'new-slider', 'uses' => 'Admin\SlidersController@store']);

    Route::get('sliders/slider-editar/{id}', 'Admin\SlidersController@edit');
    Route::post('sliders/slider-editar', ['as' => 'update-slider', 'uses' => 'Admin\SlidersController@update']);

    //SUCURSALES
    Route::get('sucursales', 'Admin\LocationsController@index');
    Route::get('sucursales/sucursal-crear', 'Admin\LocationsController@create');
    Route::post('sucursales/sucursal-crear', ['as' => 'new-location', 'uses' => 'Admin\LocationsController@store']);

    Route::get('sucursales/sucursal-editar/{id}', 'Admin\LocationsController@edit');
    Route::put('sucursales/sucursal-editar', ['as' => 'update-location', 'uses' => 'Admin\LocationsController@update']);

    //MARCAS
    Route::get('marcas', 'Admin\BrandsController@index');
    Route::get('marcas/crear', 'Admin\BrandsController@create');
    Route::post('marcas/crear', ['as' => 'new-brand', 'uses' => 'Admin\BrandsController@store']);

    Route::get('marcas/editar/{id}', 'Admin\BrandsController@edit');
    Route::put('marcas/editar', ['as' => 'update-brand', 'uses' => 'Admin\BrandsController@update']);

    //BOLSA DE TRABAJO
    Route::get('bolsa-trabajo', 'Admin\JobsController@index');
    Route::get('bolsa-trabajo/trabajo-crear', 'Admin\JobsController@create');
    Route::post('bolsa-trabajo/trabajo-crear', ['as' => 'new-job', 'uses' => 'Admin\JobsController@store']);

    Route::get('bolsa-trabajo/trabajo-editar/{id}', 'Admin\JobsController@edit');
    Route::put('bolsa-trabajo/trabajo-editar', ['as' => 'update-job', 'uses' => 'Admin\JobsController@update']);

    //EXPERT TIPS
    Route::get('tips', 'Admin\TipsController@index');
    Route::get('tips/tip-crear', 'Admin\TipsController@create');
    Route::post('tips/tip-crear', ['as' => 'new-tip', 'uses' => 'Admin\TipsController@store']);

    Route::get('tips/tip-editar/{id}', 'Admin\TipsController@edit');
    Route::put('tips/tip-editar', ['as' => 'update-tip', 'uses' => 'Admin\TipsController@update']);

    //PROMOCIONES
    Route::get('promociones', 'Admin\PromotionsController@index');
    Route::get('promociones/promocion-crear', 'Admin\PromotionsController@create');
    Route::post('promociones/promocion-crear', ['as' => 'new-promotion', 'uses' => 'Admin\PromotionsController@store']);

    Route::get('promociones/promocion-editar/{id}', 'Admin\PromotionsController@edit');
    Route::put('promociones/promocion-editar', ['as' => 'update-promotion', 'uses' => 'Admin\PromotionsController@update']);

    //MARCAS DE PRESTIGIO
    Route::get('marcas-prestigio', 'Admin\PrestigeBrandsController@index');
    Route::get('marcas-prestigio/prestigio-crear', 'Admin\PrestigeBrandsController@create');
    Route::post('marcas-prestigio/prestigio-crear', ['as' => 'new-prestige-brand', 'uses' => 'Admin\PrestigeBrandsController@store']);

    Route::get('marcas-prestigio/prestigio-editar/{id}', 'Admin\PrestigeBrandsController@edit');
    Route::put('marcas-prestigio/prestigio-editar', ['as' => 'update-prestige-brand', 'uses' => 'Admin\PrestigeBrandsController@update']);
});
