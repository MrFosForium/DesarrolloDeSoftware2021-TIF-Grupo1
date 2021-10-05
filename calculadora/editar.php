<?php
    include("conectar.php");
    $id = $_GET["id"];
    $nombre = "SELECT * FROM registro WHERE id= '$id'";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
     <title>Sistema de usuarios: Editar</title>
     <link rel="stylesheet" type="text/css" href="estilo2.css">
    </head>

  <body>
       <form class="cuadro" action="editarU.php" method="post">
            <h2 class="titulo2">Editar</h2><br>
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
           <input type="text" class="login-input" value="<?php echo $row["telefono"];?>" name="telefono"></input>
           <input type="text" class="login-input" value="<?php echo $row["escuela"];?>" name="escuela"></input>
           <input type="email" class="login-input" value="<?php echo $row["correo"];?>" name="correo"></input>
           <input type="password" class="login-input" value="<?php echo $row["clave"];?>" name="clave"></input>
           <input type="text" class="login-input" value="<?php echo $row["rol"];?>" name="rol"></input>           
           <?php } mysqli_free_result($resultado);?>
           <input type="submit" name="submit" value="Actualizar" class="login-button">
        </form>
  </body>
</html>