<?php
namespace App\Scripts;

class OCTA{

//se ingresa una cadena y se pasa a decimal
public static function interpretacion($cadena){

$longitud = strlen($cadena);
//echo("cantidad de caracteres es de".$longitud. " caracteres ");
$posicion = 0;
$decimal = 0;

for ($i=($longitud-1);$i>=0;$i--){
    $decimal += intval($cadena[$i]) * pow(8 ,$posicion);
    $posicion+=1;
}

return $decimal;
}



//Se ingresa un decimal y se pasa a octa 
public static function representacion($decimal){
    $longitud = strlen($cadena);
    $cadena = '';
    $resultado = $decimal;

    for($i=($longitud-1);$i>=0;$i--){
        $cadena.=fmod($resultado,8);
        $resultado =floor($resultado /8);
    }
    
    /*do{
        $cadena.=fmod($resultado,8);
        $resultado =floor($resultado /8);

    }while($resultado> 0);

       $cadena=  strrev($cadena);
    }*/
    return $cadena;
}

}
?>