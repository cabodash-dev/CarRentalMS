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

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/', function () {
        return view('deprecated.index');
    });
}
);
Route::group(['prefix'=>'/deprecated'],function(){
    Route::get('/', function () {
        return view('deprecated.index');
    });
    Route::get('/features', function () {
        return view('deprecated.features');
    });
    Route::get('/contact', function () {
        return view('deprecated.contact');
    });
});
