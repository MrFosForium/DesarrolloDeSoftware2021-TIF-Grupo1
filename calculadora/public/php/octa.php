<?php
class Octa{

//se ingresa una cadena y se pasa a decimal
function octaInterpretacion ($cadena){

$longitud = strlen($cadena);
//echo("cantidad de caracteres es de".$longitud. " caracteres ");
$posicion = 0;
$decimal = 0;

for ($i=($longitud-1);$i>=0;$i--){
    $decimal += intval($cadena[$i]) * pow(8 ,$posicion);
    $posicion+=1;
}
echo("El decimal es ". $decimal);
}



//Se ingresa un decimal y se pasa a octa 
function octaRepresentacion($decimal){
    $cadena = '';
    $resultado = $decimal;
    do{
        $cadena.=fmod($resultado,8);
        $resultado =floor($resultado /8);

    }while($resultado> 0);

       $cadena=  strrev($cadena);
        echo("\nel octa es ".$cadena);
    }

} 
    
?>