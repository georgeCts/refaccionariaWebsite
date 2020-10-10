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

Route::get('/', function () {
    return view('contents.Index');
});

Route::get('/nosotros', function () {
    return view('contents.Nosotros');
});

Route::get('/promociones', function () {
    return view('contents.Promociones');
});

Route::get('/expert-tips', function () {
    return view('contents.ExpertTips');
});

Route::get('/bolsa-trabajo', function () {
    return view('contents.BolsaTrabajo');
});

Route::get('/contacto', 'Web\ContactController@index');

Route::get('/login-panel', 'Admin\LoginController@index');
Route::post('/login-panel', ['as' => 'login-panel', 'uses' => 'Admin\LoginController@access']);
Route::get('/logout-panel', 'Admin\LoginController@logout');

Route::group([  'prefix'    => 'panel',
                'middleware'=> 'panel.auth'], function() {
    
    //DASHBOARD
    Route::get('/', 'Admin\PanelController@index');

    //SLIDERS
    Route::get('sliders', 'Admin\SlidersController@index');
    Route::get('sliders/slider-crear', 'Admin\SlidersController@create');
    Route::post('sliders/slider-crear', ['as' => 'new-slider', 'uses' => 'Admin\SlidersController@store']);

    Route::get('sliders/slider-editar/{pkSlider}', 'Admin\SlidersController@edit');
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
    Route::get('bolsa-trabajo/crear', 'Admin\JobsController@create');
    Route::post('bolsa-trabajo/crear', ['as' => 'new-job', 'uses' => 'Admin\JobsController@store']);

    Route::get('bolsa-trabajo/editar/{id}', 'Admin\JobsController@edit');
    Route::put('bolsa-trabajo/editar', ['as' => 'update-job', 'uses' => 'Admin\JobsController@update']);
});
