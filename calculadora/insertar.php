<?php
include("conectar.php");

$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$telefono= $_POST["telefono"];
$escuela= $_POST["escuela"];
$correo= $_POST["correo"];
$clave = md5($_POST["clave"]);
$rol= $_POST["rol"];


$insertar = "INSERT INTO registro(nombre, apellidos, telefono, escuela, correo, clave, rol) VALUES ('$nombre', '$apellidos', '$telefono', '$escuela', '$correo', '$clave', '$rol')";

$resultado = mysqli_query($con, $insertar);

if($resultado === true){
  header('Location: Lista.php');
} else {
   echo "error";
}

?>