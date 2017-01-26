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



Auth::routes();

Route::group(['middleware' => 'visitors'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    foreach (\Config::get('app.links') as $item) {
        Route::get($item, 'HomeController@' . $item);
    }
});
