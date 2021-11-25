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
    return view('calculadora.login.login');
});

Route::get('login', function () {
    return view('calculadora.login.login');
});;
Route::get('register', function(){
    return view('calculadora.login.register');
});
Route::post('registerStore', 'App\Http\Controllers\RegistroCalculosController@registerStore')->name("user.store");
Route::get('index', 'App\Http\Controllers\RegistroCalculosController@index');
Route::get('create', 'App\Http\Controllers\RegistroCalculosController@create')->name("create");
Route::post('store', 'App\Http\Controllers\RegistroCalculosController@store')->name("calc.store");

Route::resource('/calculadora', 'App\Http\Controllers\RegistroCalculosController');
