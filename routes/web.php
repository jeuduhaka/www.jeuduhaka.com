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

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('/auteurs', ['as' => 'auteurs', function () {
    return view('auteurs');
}]);

Route::get('/definition-haka-faire', ['as' => 'definition-haka-faire', function () {
    return view('definition-haka-faire');
}]);

Route::get('/photos', ['as' => 'photos', function () {
    return view('photos');
}]);

Route::get('/videos', ['as' => 'videos', function () {
    return view('videos');
}]);
