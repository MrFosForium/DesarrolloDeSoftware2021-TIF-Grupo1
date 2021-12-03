<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\RegistroCalculos;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use App\Scripts\BSS;
use App\Scripts\CA2;
use App\Scripts\EX;
use App\Scripts\HEXA;
use App\Scripts\OCTA;
use App\Scripts\SM;

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

        $registro = Usuario::all();
        foreach($registro as $users){
            if($users->Correo == $usuario->Correo){
                return redirect()->route('/registro');
            };
        };

        $usuario->save();
        return redirect()->route('calculadora.create');

    }

    public function logearse(Request $request){
        $usuario = new Usuario();
        $usuario->Correo = $request->get('Correo');
        $usuario->Clave = $request->get('Clave');


        $usuarioBD = Usuario::where('Correo',$usuario->Correo)->get(['Correo','Clave']);

        if(($usuarioBD->pluck('Correo')->first() == $usuario->Correo) and ($usuarioBD->pluck('Clave')->first() == $usuario->Clave)){

            return redirect()->route('calculadora.create');
        }

        return redirect()->route('/');
    }

    public function calcular(Request $request){

        $registros = new RegistroCalculos();
        $registros->Sistema_Numerico = $request->get('Sistema_Numerico');
        $registros->Cantidad_Digitos = $request->get('Cantidad_Digitos');
        $registros->Operacion = $request->get('Operacion');
        $registros->Primer_Cadena = $request->get('Primer_Cadena');
        $registros->Segunda_Cadena = $request->get('Segunda_Cadena');
        $registros->Operando = $request->get('Operacion');

        //===========================================================

        $resultado = 0;

        if($registros->Sistema_Numerico == 'BSS'){
            switch($registros->Operacion){
                case "Suma":
                        $resultado = \App\Scripts\BSS::suma($registros->Primer_Cadena,$registros->Segunda_Cadena);
                    break;
                case 'Resta':
                    $resultado = \App\Scripts\BSS::resta($registros->Primer_Cadena,$registros->Segunda_Cadena);
                    break;
                case 'Int':
                    $resultado = \App\Scripts\BSS::interpretacion($registros->Primer_Cadena);
                    break;
                case 'Rep':
                    $resultado = \App\Scripts\BSS::representacion($registros->Primer_Cadena);
                    break;
            }
        }elseif($registros->Sistema_Numerico == 'SM'){
            switch($registros->Operacion){
                case "Suma":
                    $resultado = \App\Scripts\SM::suma($registros->Primer_Cadena,$registros->Segunda_Cadena);
                    break;
                case 'Resta':
                    $resultado = \App\Scripts\SM::resta($registros->Primer_Cadena,$registros->Segunda_Cadena);
                    break;
                case 'Int':
                    $resultado = \App\Scripts\SM::interpretacion($registros->Primer_Cadena);
                    break;
                case 'Rep':
                    $resultado = \App\Scripts\SM::representacion($registros->Primer_Cadena);
                    break;
            }
        }elseif($registros->Sistema_Numerico == 'CA2'){
            switch($registros->Operacion){
                case 'Int':
                    $resultado = \App\Scripts\CA2::interpretacion($registros->Primer_Cadena);
                    break;
                case 'Rep':
                    $resultado = \App\Scripts\CA2::representacion($registros->Primer_Cadena);
                    break;
            }
        }elseif($registros->Sistema_Numerico == 'EX'){
            switch($registros->Operacion){
                case 'Int':
                    $resultado = \App\Scripts\EX::interpretacion($registros->Primer_Cadena);
                    break;
                case 'Rep':
                    $resultado = \App\Scripts\EX::representacion($registros->Primer_Cadena);
                    break;
            }
        }elseif($registros->Sistema_Numerico == 'HEX'){
            switch($registros->Operacion){
                case 'Int':
                    $resultado = \App\Scripts\HEXA::interpretacion($registros->Primer_Cadena);
                    break;
                case 'Rep':
                    $resultado = \App\Scripts\HEXA::representacion($registros->Primer_Cadena);
                    break;
            }
        }elseif($registros->Sistema_Numerico == 'OCT'){
            switch($registros->Operacion){
                case 'Int':
                    $resultado = \App\Scripts\OCTA::interpretacion($registros->Primer_Cadena);
                    break;
                case 'Rep':
                    $resultado = \App\Scripts\OCTA::representacion($registros->Primer_Cadena);
                    break;
            }
        }

        $registros->Resultado = $resultado;
        $registros->save();

        return redirect('/create')->with('info',$resultado);
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
