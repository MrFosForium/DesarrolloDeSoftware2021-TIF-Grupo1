<?php
    require('conectar.php');

    $nombre = $_POST['nombre'];
    $clave = $_POST["clave"];
     
    $q= "SELECT Count(*) as contar, nombre, clave, rol FROM registro Where nombre = '$nombre ' and clave = '$clave'";
    $consulta = mysqli_query($con,$q);
    $array = mysqli_fetch_array($consulta);
  
    if($array['contar']>0){ 
        if($array['rol'] == 'alumno'){
            header("Location: Calc.php");
        } else if($array['rol'] == 'docente'){
            header("Location: Lista.php");
        }

    }else{
        echo '<script language="javascript">
        alert("Los datos implementado es incorrecto.");
        window.location.href="sesion.html";
        </script>';
    }

?>