<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroCalculos;
use App\Models\Usuario;

class RegistroCalculosController extends Controller
{
    public function registerStore(Request $request)
    {
        $usuario = new Usuario();
        $usuario->Nombre = $request->get('Nombre');
        $usuario->Apellido = $request->get('Apellido');
        $usuario->Escuela = $request->get('Escuela');
        $usuario->Correo = $request->get('Correo');
        $usuario->Clave = $request->get('Clave');
        $usuario->save();

        return redirect()->route('calculadora.create');
    }

    public function loginData(){
        return view('calculadora.create');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = RegistroCalculos::all();
        return view('calculadora.index')->with('registro',$registro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calculadora.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registros = new RegistroCalculos();
        $registros->Sistema_Numerico = $request->get('Sistema_Numerico');
        $registros->Cantidad_Digitos = $request->get('Cantidad_Digitos');
        $registros->Operacion = $request->get('Operacion');
        $registros->Primer_Cadena = $request->get('Primer_Cadena');
        $registros->Segunda_Cadena = $request->get('Segunda_Cadena');
        $registros->Operando = $request->get('Operando');
        $registros->Resultado = $request->get('Resultado');
        $registros->save();

        return redirect()->route('calculadora.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
