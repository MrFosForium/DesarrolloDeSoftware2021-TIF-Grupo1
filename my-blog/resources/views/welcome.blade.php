@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <!-- Nombre de la app -->
                <!-- <h1 class="display-one mt-5">{{ config('app.name') }}</h1> -->

                <h1 align='center' class='display-one mt-5'> "Insertar Proximo Logo" </h1>

                <section class='prueba' id='body'>
                    <div id="contenedor">
                        <div id="central">
                            <div id="login">
                                <div class="titulo">
                                Iniciar sesion
                                </div>

                                <form align='center' action="sesion.php" method="post" id="loginform">
                                    <input type="text" class="login-input" name="nombre" placeholder="Ingresa tu nombre" required/>
                                    <input type="password" class="login-input" name="clave" placeholder="Ingresa tu clave" maxlength="10" required>
                                    <br>
                                    <button name="submit" value="Enviar" class="login-button" type="submit" title="Ingresar">Enviar</button>
                                </form>

                                <div align='center' class="pie-form">
                                    <a href="/blog/registro">¿No tienes Cuenta? Registrate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Boton para ir al index -->
                <a href="/blog" class="btn btn-outline-primary">Dame click para ir a la calculadora</a>
            </div>
        </div>
    </div>
@endsection
