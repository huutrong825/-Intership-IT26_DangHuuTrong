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

// Route::get('/', function () {
//     return view('welcome');
// });

// Định tuyến cơ bản
Route::get('/hello', function () {
    return "Hello Developer";
});

Route::get('/hello/user', function(){
    return '<h2>User Screen</h2>';
});
// Truyền tham số cho Route
Route::get('name/{ten}',function($ten){
    echo "Tên của bạn là: ".$ten;
});

Route::get('/Test',['as'=>'test','uses'=>'TestController@show']);


// Dùng Auth kiểm tra Login
Route::get('/login',['uses'=>'AuthController@getLogin']);
Route::post('/login',['uses'=>'AuthController@postLogin']);

Route::get('/register',['uses'=>'AuthController@getRegister']);
Route::post('/register',['uses'=>'AuthController@postRegister']);

Route::get('/logout',['uses'=>'AuthController@getLogout']);

Route::group(['middleware'=>'AdminLogin'],function(){

    Route::get('/admin',function(){
        return view('Admin');
    });

    Route::group(['prefix'=>'User'],function(){

        Route::get('',['uses'=>'UserController@getAll']);

        Route::get('/AddUser',['uses'=>'UserController@getFormAdd']);
        Route::post('/AddUser',['uses'=>'UserController@postFormAdd']);

    });

    Route::group(['prefix'=>'Customer'],function(){

        Route::get('',['uses'=>'CustomerController@getAll']);
    });

    Route::group(['prefix'=>'Product'],function(){

        Route::get('',['uses'=>'ProductController@getAll']);
    });
});