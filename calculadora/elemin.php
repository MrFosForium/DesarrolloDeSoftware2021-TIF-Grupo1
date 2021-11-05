<?php
 include 'conectar.php';
 
 $id= $_GET['id'];
 $eleminar = "DELETE FROM registro WHERE id = '$id'";

 $resultado = mysqli_query($con, $eleminar);

    if ($resultado) {
      header("Location: Lista.php");
    } else {
         echo "No se pudo eleminar";
        }
?>