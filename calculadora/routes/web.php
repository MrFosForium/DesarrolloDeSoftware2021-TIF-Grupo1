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

Route::get('login', 'App\Http\Controllers\RegistroCalculosController@login');
Route::get('register', 'App\Http\Controllers\RegistroCalculosController@register');
Route::get('index', 'App\Http\Controllers\RegistroCalculosController@index');
Route::get('create', 'App\Http\Controllers\RegistroCalculosController@create');
Route::post('store', 'App\Http\Controllers\RegistroCalculosController@store')->name("calc.store");

Route::resource('/calculadora', 'App\Http\Controllers\RegistroCalculosController');
