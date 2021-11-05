<?php
  require('conectar.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>
   <title>Sistema de usuarios</title>
    <link rel="stylesheet" type="text/css" href="estilo3.css">
  </head>

  <body>
    <img src="Logo.png"> 
    <a href="cerrar.php"><p class="text-info">Cerrar</p></a><br>
    <a href="Calc.php"><p class="text-info">La calculadora</p></a><br>
    <main class="todo">
      
     <form action="insertar.php" method="post" class="cuadro">
        <h2 class="titulo2">Registrar nuevos</h2><br>
        <input type="text" class="login-input" name="nombre" placeholder="Ingresa tu nombre" required/>
        <input type="text" class="login-input" name="apellidos" placeholder="Ingresa tu apellido" required/>
        <input type="text" class="login-input" name="telefono" placeholder="Ingresa tu telefono"/>
        <input type="text" class="login-input" name="escuela" placeholder="Ingresa tu Escuela" required/>
        <input type="email" class="login-input" name="correo" placeholder="Ingresa tu correo" required>
        <input type="password" class="login-input" name="clave" placeholder="Ingresa tu contraseña" maxlength="10" required>
        <select  name="rol">
          <option value="" selected="selected"> selecciona el tipo de ingreso </option>
          <option value="docente">Docente</option>
          <option value="alumno">Alumno</option>
       </select>
        <input type="submit" name="submit" value="Enviar" class="login-button">
     </form><br><br>


     <h1 class="titulo3">Lista de Alumno y Docentes</h1> 

      <table>
        <tr>
         <th>ID</th>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>Telefono</th>
         <th>Escuela</th>
         <th>Correo</th>
         <th>Contraseña</th>
         <th>rol</th>
         <th>opciones</th>
       </tr>

       <?php
         $query = mysqli_query($con, "SELECT * FROM `registro`");
         $result = mysqli_num_rows($query);
         if($result > 0 ){   
         while($data = mysqli_fetch_array($query)){
       ?>

        <tr>
         <td><?php echo $data['id'];?></td>
         <td><?php echo $data['nombre'];?></td>
         <td><?php echo $data['apellidos'];?></td>
         <td><?php echo $data['telefono'];?></td>
         <td><?php echo $data['escuela'];?></td>
         <td><?php echo $data['correo'];?></td>
         <td><?php echo $data['clave'];?></td>
         <td><?php echo $data['rol'];?></td>
         <td><a class="editar" href="editar.php?id=<?php echo $data['id']; ?>">Editar</a></td>
         <td><a class="editar" href="elemin.php?id=<?php echo $data['id']; ?>">Eleminar</a></td>
        </tr>
        
       <?php
          }
         }
       ?>
      </table>
    </main>
  </body>
</html>