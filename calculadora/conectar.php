<?php
   
    $con = mysqli_connect("localhost","root","","calc_registro");
    if (mysqli_connect_errno()){
        echo "Falla la coneccion con el mysqli: " . mysqli_connect_error();
    }
?>