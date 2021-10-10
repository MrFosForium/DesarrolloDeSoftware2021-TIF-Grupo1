<?php
    require('conectar.php');

    $nombre = $_POST["nombre"];
    $clave = md5($_POST["clave"]);

 
    $consulta = "SELECT nombre, clave, rol FROM registro WHERE nombre = ? and clave = ?";
    
    $resulta=mysqli_prepare($con, $consulta);
    $todo=mysqli_stmt_bind_param($resulta, 'ss', $nombre, $clave);
    $todo=mysqli_stmt_execute($resulta);

    if ($todo==false) {
        echo "Error al iniciar sesion";
    }else{
        $todo=mysqli_stmt_bind_result($resulta, $nombre, $clave, $rol);
    }

    while(mysqli_stmt_fetch($resulta)) {
       echo "hola " . $nombre . "<br>";
       echo "eres " . $rol . "<br>";
    }

    if($rol=="docente"){
        include("Lista.php");
    } else {
        include("Calc.php");  
    }


 mysqli_stmt_close($resulta);
 mysqli_close($con);   
?>