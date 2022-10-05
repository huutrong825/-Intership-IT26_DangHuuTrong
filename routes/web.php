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
    return view('welcome');
});

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

Route::get('/Customer',['uses'=>'CustomerController@getAll']);
Route::get('/User',['uses'=>'UserController@getAll']);
Route::get('/Product',['uses'=>'ProductController@getAll']);
// Dùng Auth kiểm tra Login
Route::get('/login',['uses'=>'UserController@getLogin']);
Route::post('/login',['uses'=>'UserController@postLogin']);

Route::get('/register',['uses'=>'UserController@getRegister']);
Route::post('/register',['uses'=>'UserController@postRegister']);

Route::get('/logout',['uses'=>'UserController@getLogout']);

// Xác thực đăng nhập mới load trang
Route::get('/admin',function(){
    return view('Admin');
})->middleware('AdminLogin::class');


