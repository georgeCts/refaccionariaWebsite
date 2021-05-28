<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/catalogos', 'Web\CatalogsController@index');
Route::get('/catalogos/{slug}', 'Web\CatalogsController@show');
Route::get('/contacto', 'Web\ContactController@index');
Route::post('/contacto-mail', 'Web\ContactController@sendMail');
Route::post('/contacto-cv', 'Web\ContactController@sendCV');
Route::post('/contacto-quote', 'Web\ContactController@sendQuote');
Route::post('/contacto-subscribe', 'Web\ContactController@sendSubscription');

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

    Route::post('productos/importar', 'Admin\ProductsController@import');

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
    Route::get('brands', 'Admin\BrandsController@index');
    Route::get('brands/brand-crear', 'Admin\BrandsController@create');
    Route::post('brands/brand-crear', ['as' => 'new-brand', 'uses' => 'Admin\BrandsController@store']);

    Route::get('brands/brand-editar/{id}', 'Admin\BrandsController@edit');
    Route::put('brands/brand-editar', ['as' => 'update-brand', 'uses' => 'Admin\BrandsController@update']);

    //MODELOS
    Route::get('brands/{id}/models', 'Admin\ModelsController@index');
    Route::get('brands/{id}/models/model-crear', 'Admin\ModelsController@create');
    Route::post('brands/models', ['as' => 'new-model', 'uses' => 'Admin\ModelsController@store']);

    Route::get('brands/models/model-editar/{id}', 'Admin\ModelsController@edit')->name('model.edit');
    Route::put('brands/models', ['as' => 'update-model', 'uses' => 'Admin\ModelsController@update']);

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

    //CATALOGOS
    Route::get('catalogos', 'Admin\CatalogsController@index');
    Route::get('catalogos/catalogo-crear', 'Admin\CatalogsController@create');
    Route::post('catalogos/catalogo-crear', ['as' => 'new-catalog', 'uses' => 'Admin\CatalogsController@store']);

    Route::get('catalogos/catalogo-editar/{id}', 'Admin\CatalogsController@edit');
    Route::put('catalogos/catalogo-editar', ['as' => 'update-catalog', 'uses' => 'Admin\CatalogsController@update']);

    Route::get('catalogos/eliminar/{id}', 'Admin\CatalogsController@delete');

    //CATEGORIAS
    Route::get('categorias', 'Admin\CategoriesController@index');
    Route::get('categorias/categoria-crear', 'Admin\CategoriesController@create');
    Route::post('categorias/categoria-crear', ['as' => 'new-category', 'uses' => 'Admin\CategoriesController@store']);

    Route::get('categorias/categoria-editar/{id}', 'Admin\CategoriesController@edit');
    Route::put('categorias/categoria-editar', ['as' => 'update-category', 'uses' => 'Admin\CategoriesController@update']);

    Route::get('categorias/eliminar/{id}', 'Admin\CategoriesController@delete');
});
