<?php
//Se ingresa una cadena binaria, se pasa a decimal y luego se retorna
function interpretacion($cadena){
$decimal = 0;
$posicion = 0;
$longitud = strlen($cadena);
for ($i=($longitud-1);$i>=0;$i--){
    $decimal += intval($cadena[$i]) * pow(2 ,$posicion);
    $posicion+=1;
}
return $decimal;
}


//Se ingresa un decimal, se pasa a binario sin signo y luego se retorna 
function representacion($decimal){
$cadena = '';
$resultado = $decimal;
do{
    $cadena.=fmod($resultado,2);
    $resultado =floor($resultado /2);
}while($resultado> 0);
    return strrev($cadena);    
}   

echo("Resultado".representacion(1000));

 
//se ingreso una cadena, saca su signo, calcula y retorna
function interpretacionSM($cadena){

$longitud= strlen($cadena);
$signo= substr($cadena,0,1);
$cadena= substr($cadena,1,$longitud);
$resultado=interpretacion($cadena);
$resultado=ponerSigno($signo,$resultado);
echo("interpretacion".$resultado);
}

function ponerSigno($signo,$resultado){
if ($signo =="1"){
    $resultado=$resultado*-1;
}
return $resultado;
}
//interpretacionSM("1110");


function representacionSM($decimal){


    

}
?>