<?php
  require('conectar.php');
?>

<!DOCTYPE html>
<html lang="en">
   <head>
     <title>Sistema de usuarios</title>
      <link rel="stylesheet" type="text/css" href="estilo3.css">  
      <link rel="stylesheet" type="text/css" href="estilo1.css">  
    </head>

  <body>
    <main class="perfil">
     <h2 class="titulo2">Datos personales</h2><br><br>





    </main>
    <header>
       <div class="menus">
           <?php          
               echo "<nav class='menu'>
                  <a href='cerrar.php'>Cerrar</a>
                  </nav>";
                   
                ?>
            <div class="texto-principal">               
               <h1 href="http://www.thismanslife.co.uk" target="_blank">Docente</h1>
            </div>
       </div>
 </header>

   <img class="persona" src="persona.jpg">
  
    <a href="#miModal">
      <img src="Logo.png"></img>
     </a>  
     <div id="miModal" class="modal">
       <div class="modal-contenido">
         <a style="color: #fff;" href="#">X</a>
         <div class="contenido secreto">
          <img style="width: 20%; height: 20%; " src="Matiti.png"></img>
         <h1 style="color: #fff; text-align: center; font-family: 'Times New Roman', Times, serif ;" >Docente: </h1>         
        </div>
     </div>  
     </div>



    <main class="todo">
      <div id="contenedor">
        <div id="central">
            <div id="login">
               <div class="titulo">
                 Agregar nuevos usuarios
               </div>

               <form action="insertar.php" method="post" id="loginform">
                  <input type="text" class="login-input" name="nombre" placeholder="Ingresa tu nombre" required/><br>
                  <input type="text" class="login-input" name="apellidos" placeholder="Ingresa tu apellido" required/><br>
                  <input type="text" class="login-input" name="escuela" placeholder="Ingresa tu Escuela" required/><br>
                  <input type="email" class="login-input" name="correo" placeholder="Ingresa tu correo" required><br>
                  <input type="password" class="login-input" name="clave" placeholder="Ingresa tu clave" maxlength="10" required><br>
                  
                  <select  name="rol">
                   <option value="" selected="selected"> selecciona el tipo de ingreso </option>
                   <option value="docente">Docente</option>
                   <option value="alumno">Alumno</option>
                 </select><br>

                <button name="submit" value="Enviar" class="login-button" type="submit" title="Ingresar">Enviar</button>
              </form>
            </div>
         </div>
      </div><br>
    


     <h1 class="titulo3">Lista de Alumno y Docentes</h1> 

      <table>
        <tr style="text-align: center;">
         <th >ID</th>
         <th>Nombre</th>
         <th>Apellido</th>
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
         <td style="background: white;" ><?php echo $data['id'];?></td>
         <td style="background: gray;"><?php echo $data['nombre'];?></td>
         <td style="background: white;"><?php echo $data['apellidos'];?></td>
         <td style="background: gray;"><?php echo $data['escuela'];?></td>
         <td style="background: white;"><?php echo $data['correo'];?></td>
         <td style="background: gray;"><?php echo $data['clave'];?></td>
         <td style="background: white;"><?php echo $data['rol'];?></td>
         <td><a class="editar" href="editar.php?id=<?php echo $data['id']; ?>">Editar</a></td>
         <td><a class="editar" href="elemin.php?id=<?php echo $data['id']; ?>">Eleminar</a></td>
        </tr>
        
       <?php
          }
         }
       ?>
      </table>
    </main>

    <div class="bocadillo-cuadrado">
      <h1>Los estudiantes de la orientacion programacion de la Escuela Secundaria de Educacion Tecnica de la U.N.Q<br>  
         Realizaron una Calculadora y un sistema de listado de los usuarios registrados.<br><br>
         Te permite agregar nuevos usuarios como tambien poder modificar y eleminar los usuarios existentes.</h1> 
   </div>

  </body>
</html>
