<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('calculadora.login.login');
});

Route::post('login', 'App\Http\Controllers\RegistroCalculosController@login')->name("login");
Route::get('register', function(){
    return view('calculadora.login.register');
});
Route::post('registerStore', 'App\Http\Controllers\RegistroCalculosController@registerStore')->name("user.store");
Route::get('index', 'App\Http\Controllers\RegistroCalculosController@index');
Route::get('create', 'App\Http\Controllers\RegistroCalculosController@create')->name("create");
Route::post('store', 'App\Http\Controllers\RegistroCalculosController@store')->name("calc.store");

Route::resource('/calculadora', 'App\Http\Controllers\RegistroCalculosController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
