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

// use Illuminate\Routing\Route

use Illuminate\Support\Facades\Auth;

Route::get('/','HomeController@index');
Route::get('/bai-viet/{id}', 'BaivietController@show');

Auth::routes();

Route::get('/home', 'LoginController@index')->name('home');
Route::get('/tim-kiem', 'HomeController@timkiem')->name('home');
Route::prefix('v1')->group(function(){
    Route::resource('customer','Api\v1\CustomerController')->only(['show','edit','create','update','destroy','store','index']);
    Route::resource('category','Api\v1\CategoryPostController')->only(['show','edit','create','update','destroy','store','index']);
    Route::resource('post','Api\v1\PostController')->only(['show','edit','create','update','destroy','store','index']);
});
Route::prefix('v2')->group(function(){
    Route::resource('customer','Api\v2\CustomerController')->only(['show']);//,'edit','create','update','destroy','store','index']);
});
