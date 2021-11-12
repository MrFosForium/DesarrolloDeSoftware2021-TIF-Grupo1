<html lang="es">
    
   <head>        
    <meta charset="utf-8">
    <title> Registrar</title> 
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">    

   </head>

   <body>
      <img class="logo" src="<?php echo asset('img/Logo.png')?>">
     <div id="contenedor">
        <div id="central">
            <div id="login">
               <div class="titulo">
                 Registrate!
               </div>

               <form action="0registrar.php" method="post" id="loginform">
                  <input type="text" class="login-input" name="nombre" placeholder="Ingresa tu nombre" required/><br>
                  <input type="text" class="login-input" name="apellidos" placeholder="Ingresa tu apellido" required/><br>
                  <input type="text" class="login-input" name="escuela" placeholder="Ingresa tu Escuela" required/><br>
                  <input type="email" class="login-input" name="correo" placeholder="Ingresa tu correo" required><br>
                  <input type="password" class="login-input" name="clave" placeholder="Ingresa tu clave" maxlength="10" required><br>
                  
                  <select name="rol">
                   <option value="" selected="selected"> selecciona el tipo de ingreso </option>
                   <option value="docente">Docente</option>
                   <option value="alumno">Alumno</option>
                 </select><br>

                <button name="submit" value="Enviar" class="login-button" type="submit" title="Ingresar">Enviar</button>
              </form>
                    
               <div class="pie-form">
                  <a href="/login/login">¿Ya tienes Cuenta? Ingresa aqui</a>
               </div>
                
            </div>
         </div>
      </div>
            
    </body>
</html>