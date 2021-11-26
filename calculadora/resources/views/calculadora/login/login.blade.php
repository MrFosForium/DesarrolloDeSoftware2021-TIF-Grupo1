@extends('layouts.plantilla')
@section('contenido')
<img class="logo" src="<?php echo asset('img/Logo.png')?>">
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                       Iniciar sesion
                    </div>

                    <form action='{{route("login")}}' method='post'>
                        @csrf
                        <label>
                            <input type="text" class="login-input" name="Correo" placeholder="Ingresa tu correo" required/>
                        </label>
                        <label>
                            <input type="password" class="login-input" name="Clave" placeholder="Ingresa tu clave" maxlength="25" required>
                        </label>
                        <button class="login-button" type="submit">Acceder</button>
                    </form>

                    <div class="pie-form">
                        <a href="/register">¿No tienes Cuenta? Registrate</a>
                    </div>
                </div>
            </div>
        </div>
@endsection