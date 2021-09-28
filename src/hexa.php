


//Se ingresa una cadena binaria, se pasa a decimal y luego se retorna

function hexa($cadena){
$decimal = 0;
$posicion = 0;
$longitud = strlen($cadena);
for ($i=($longitud-1);$i>=0;$i--){
    $decimal += intval($cadena[$i]) * pow( $posicion, 16);
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

?>