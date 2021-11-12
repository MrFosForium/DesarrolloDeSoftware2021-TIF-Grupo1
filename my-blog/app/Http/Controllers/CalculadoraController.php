<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function register(){
        return view('login/register');
    }

    public function login(){
        return view('login/login');
    }
}
