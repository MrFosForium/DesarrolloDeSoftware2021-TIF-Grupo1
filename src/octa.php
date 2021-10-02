<?php
function octa ($cadena){

$longitud = strlen($cadena);
echo("cantidad de caracteres es de".$longitud. " caracteres ");
$posicion = 0;
$decimal = 0;

for ($i=($longitud-1);$i>=0;$i--){
    $decimal += intval($cadena[$i]) * pow(8 ,$posicion);
    $posicion+=1;
}
echo("El decimal es ". $decimal);
}


octa("0111");
?>