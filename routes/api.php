<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//only chi
//except tru ra
Route::prefix('v1')->group(function(){
    Route::resource('customer','Api\v1\CustomerController')->only(['show','edit','create','update','destroy','store','index']);
    Route::resource('category','Api\v1\CategoryPostController')->only(['show','edit','create','update','destroy','store','index']);
    Route::resource('post','Api\v1\PostController')->only(['show','edit','create','update','destroy','store','index']);
    Route::resource('bai-viet','Api\v1\BaivietController');
    Route::resource('danh-muc','Api\v1\DanhmucController')->only(['show','edit','create','update','destroy','store','index']);
});
Route::prefix('v2')->group(function(){
    Route::resource('customer','Api\v2\CustomerController')->only(['show']);//,'edit','create','update','destroy','store','index']);
});
