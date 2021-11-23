<?php
include("conectar.php");

$id = $_POST['id'];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$escuela = $_POST["escuela"];
$correo  = $_POST["correo"];
$clave = $_POST["clave"];
$rol  = $_POST["rol"];

$editar = "UPDATE registro SET nombre='$nombre', apellidos='$apellidos', escuela='$escuela', correo='$correo', clave='$clave', rol='$rol' 
WHERE id='$id'";

$resultado = mysqli_query($con, $editar);

if($resultado === true){
  echo "Se han actualizado correctamente";
  header('Location: Lista.php');
} else {
   echo "error";
}

?>