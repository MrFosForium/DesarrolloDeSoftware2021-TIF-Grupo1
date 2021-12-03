<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('calculadora.login.loggin');
})->name("/");

Route::get('loggin', function(){
    return view('calculadora.login.loggin');
})->name("loggin");

Route::get('/registro', function(){
    return view('calculadora.login.registro');
})->name("/registro");

Route::post('/logearse', 'App\Http\Controllers\RegistroCalculosController@logearse');
Route::post('registerStore', 'App\Http\Controllers\RegistroCalculosController@registerStore')->name("user.store");
Route::get('index', 'App\Http\Controllers\RegistroCalculosController@index');
Route::get('create', 'App\Http\Controllers\RegistroCalculosController@create')->name("create");
Route::post('store', 'App\Http\Controllers\RegistroCalculosController@store')->name("calc.store");
Route::post('/calcular', 'App\Http\Controllers\RegistroCalculosController@calcular');

Route::resource('/calculadora', 'App\Http\Controllers\RegistroCalculosController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
