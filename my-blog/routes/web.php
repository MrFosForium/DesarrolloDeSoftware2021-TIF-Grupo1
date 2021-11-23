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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/categorias', 'App\Http\Controllers\CalculadoraController@index');
route::post('/login/register', 'App\Http\Controllers\CalculadoraController@register');
route::get('/login/login', 'App\Http\Controllers\CalculadoraController@login');