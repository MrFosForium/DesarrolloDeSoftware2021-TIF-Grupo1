<?php
include("conectar.php");

$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$escuela= $_POST["escuela"];
$correo= $_POST["correo"];
$clave = $_POST["clave"];
$rol= $_POST["rol"];


$insertar = "INSERT INTO registro(nombre, apellidos, escuela, correo, clave, rol) VALUES ('$nombre', '$apellidos', '$escuela', '$correo', '$clave', '$rol')";

$resultado = mysqli_query($con, $insertar);

if($resultado === true){
  header('Location: Lista.php');
} else {
   echo "error";
}

?>