<?php
    require('conectar.php');

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];
    $escuela = $_POST["escuela"];
    $correo  = $_POST["correo"];
    $clave = md5($_POST["clave"]);
    $rol  = $_POST["rol"];

 $insertar = "INSERT INTO `registro`(nombre, apellidos, telefono, escuela, correo, clave, rol) VALUES ('$nombre','$apellidos','$telefono','$escuela','$correo','$clave','$rol')";

 $verificar = mysqli_query($con, "SELECT * FROM `registro` WHERE correo = '$correo'");

 if(mysqli_num_rows($verificar) > 0){
    echo '<script>
          alert("El usuario ya esta registrado con este correo");
          window.history.go(-1);
          </script>';
    exit;
 }

 $resultado = mysqli_query($con, $insertar);

    if(!$resultado) {
        echo 'error al registrar';
    } else {
        $registerMsg="Registro exitoso";
        header("refresh:2;sesion.html");
    }

 mysqli_close($con);
?>