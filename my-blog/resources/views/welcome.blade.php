@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
            <head>
     <meta charset="utf-8"/>
     <title>Registrar</title>
     <link rel="stylesheet" href="./css/app.css"/>
    </head>
    <body>     
       <form class="form" action="0registrar.php" method="post">
         <h1 class="titulo">Crear cuenta</h1>
         <input type="text" class="login-input" name="nombre" placeholder="Ingresa tu nombre" required/><br>
         <input type="text" class="login-input" name="apellidos" placeholder="Ingresa tu apellido" required/><br>
         <input type="text" class="login-input" name="telefono" placeholder="Ingresa tu telefono" maxlength="10"/><br>
         <input type="text" class="login-input" name="escuela" placeholder="Ingresa tu Escuela" required/><br>
         <input type="email" class="login-input" name="correo" placeholder="Ingresa tu correo" required><br>
         <input type="password" class="login-input" name="clave" placeholder="Ingresa tu contraseña" maxlength="10" required><br>
         <select  name="rol">
          <option value="" selected="selected"> selecciona el tipo de ingreso </option>
          <option value="docente">Docente</option>
          <option value="alumno">Alumno</option>
       </select><br>
         <input type="submit" name="submit" value="Enviar" class="login-button"><br>
         <a href="sesion.html"><p class="text-info">Iniciar sesión</p></a><br>
        </form>

        

   </body>

@endsection
