@extends('layouts.plantilla')
@section('contenido')
<link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
<img class="logo" src="<?php echo asset('img/Logo.png')?>">
    <div id="contenedor">
        <div id="central">
            <div id="login">
               <div class="titulo">
                 Registrate!
               </div>

               <form action="{{route('user.store')}}" method="post" id="loginform">
                  @csrf
                  <input type="text" class="login-input" id="Nombre" name="Nombre" placeholder="Ingresa tu nombre" required/><br>
                  <input type="text" class="login-input" id="Apellido" name="Apellido" placeholder="Ingresa tu apellido" required/><br>
                  <input type="text" class="login-input" id="Escuela" name="Escuela" placeholder="Ingresa tu Escuela" required/><br>
                  <input type="email" class="login-input" id="Correo" name="Correo" placeholder="Ingresa tu correo" required><br>
                  <input type="password" class="login-input" id="Clave" name="Clave" placeholder="Ingresa tu clave" maxlength="25" required><br>

                  <button name="submit" value="Enviar" class="login-button" type="submit" title="Ingresar">Enviar</button>
              </form>
                    
               <div class="pie-form">
                  <a href="/loggin">¿Ya tienes Cuenta? Ingresa aqui</a>
               </div>
                
            </div>
         </div>
      </div>
@endsection