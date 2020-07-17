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

Route::get('/', 'Web\HomeController@index');

Route::get('/login-panel', 'Admin\LoginController@index');
Route::post('/login-panel', ['as' => 'login-panel', 'uses' => 'Admin\LoginController@access']);
Route::get('/logout-panel', 'Admin\LoginController@logout');

Route::get('/nosotros', 'Web\NavigationController@company');
Route::get('/servicios', 'Web\NavigationController@services');
Route::get('/contacto', 'Web\NavigationController@contact');

Route::get('/post/{slug}', 'Web\PostsController@show');

Route::group([  'prefix'    => 'panel',
                'middleware'=> 'panel.auth'], function() {
    
    //DASHBOARD
    Route::get('/', 'Admin\PanelController@index');

    Route::get('publicaciones', 'Admin\PostsController@index');
    Route::get('publicaciones/publicacion-crear', 'Admin\PostsController@create');
    Route::post('publicaciones/publicacion-crear', ['as' => 'new-post', 'uses' => 'Admin\PostsController@store']);

    Route::get('publicaciones/publicacion-editar/{pkPost}', 'Admin\PostsController@edit');
    Route::put('publicaciones/publicacion-editar', ['as' => 'update-post', 'uses' => 'Admin\PostsController@update']);

    //SLIDERS
    Route::get('sliders', 'Admin\SlidersController@index');
    Route::get('sliders/slider-crear', 'Admin\SlidersController@create');
    Route::post('sliders/slider-crear', ['as' => 'new-slider', 'uses' => 'Admin\SlidersController@store']);

    Route::get('sliders/slider-editar/{pkSlider}', 'Admin\SlidersController@edit');
    Route::post('sliders/slider-editar', ['as' => 'update-slider', 'uses' => 'Admin\SlidersController@update']);

    //VIDEOS
    Route::get('videos', 'Admin\VideosController@index');
    Route::get('videos/video-crear', 'Admin\VideosController@create');
    Route::post('videos/video-crear', ['as' => 'new-video', 'uses' => 'Admin\VideosController@store']);

    Route::get('videos/video-editar/{pkVideo}', 'Admin\VideosController@edit');
    Route::put('videos/video-editar', ['as' => 'update-video', 'uses' => 'Admin\VideosController@update']);
});
