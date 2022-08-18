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

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::post('/login','UserController@login');
Route::view('/register','Register');
Route::post('/register','UserController@Register');

//Route::get('/','ProductController@index');
Route::get('/','ProductController@trendingitem');
Route::get('details/{id}','ProductController@details');
Route::get('search','ProductController@search');
Route::post('add_to_cart','ProductController@addtoCart');
Route::get('cartlist','ProductController@cartlist');
Route::get('removecart/{id}','ProductController@removeCart');
Route::get('ordernow','ProductController@orderNow');
Route::post('orderplace','ProductController@orderPlace');
Route::get('myorder','ProductController@myOrder');




