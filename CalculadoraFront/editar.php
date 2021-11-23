<?php
    include("conectar.php");
    $id = $_GET["id"];
    $nombre = "SELECT * FROM registro WHERE id= '$id'";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
     <title>Sistema de usuarios: Editar</title>
     <link rel="stylesheet" type="text/css" href="estilo1.css">
     <link rel="stylesheet" type="text/css" href="estilo2.css">
    </head>
  <body style="background: #550707;">

  <div id="contenedor">
        <div id="central">
            <div id="login">
               <div class="titulo">
                 Editar usuarios
               </div>

               <form class="cuadro" action="editarU.php" method="post">
                 <div class="columna"></div>
                 <div class="columna"></div>
                 <div class="columna"></div>
                 <div class="columna"></div>
                 <div class="columna"></div>
                 <div class="columna"></div>
                 <div class="columna"></div>
                 <?php $resultado = mysqli_query($con, $nombre);
                  while($row=mysqli_fetch_assoc($resultado)) { ?>  
                  <input type="text" class="login-input" value="<?php echo $row["id"];?>" name="id"></input>
                  <input type="text" class="login-input" value="<?php echo $row["nombre"];?>" name="nombre"></input>
                  <input type="text" class="login-input" value="<?php echo $row["apellidos"];?>" name="apellidos"></input>
                  <input type="text" class="login-input" value="<?php echo $row["escuela"];?>" name="escuela"></input>
                  <input type="email" class="login-input" value="<?php echo $row["correo"];?>" name="correo"></input>
                  <input type="password" class="login-input" value="<?php echo $row["clave"];?>" name="clave"></input>
                  <select name="rol">
                   <option value="" selected="selected"> Lo Quieres cambiar ? </option>
                   <option value="docente">Docente</option>
                   <option value="alumno">Alumno</option>
                 </select><br>                 <?php } mysqli_free_result($resultado);?>
                 <button name="submit" value="Enviar" class="login-button" type="submit" title="Ingresar">Actualizar</button>
                </form>
            </div>
         </div>
      </div><br>   
  </body>
</html>