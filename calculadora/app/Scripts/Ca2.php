<?php
namespace App\Scripts;
include 'bss.php';

class CA2 extends BSS{
public static function complementar($cadena){
    $resultadoFinal=0;
    $resultado=' ' ;
    $longitud = strlen($cadena);
    for ($i=($longitud-1);$i>=0;$i--){
        if($cadena[$i]=='1'){
            $cadena[$i]='0';
        }
        else {
        $cadena[$i]='1'; }
    }
    $resultado = suma($cadena, 1); 
    $resultadoFinal=BSS::interpretacion($resultado)*-1;
    return $resultadoFinal;
}
//echo(complementar('1010'));

public static function interpretacion($cadena){
$x = substr($cadena,0,1);
if ($x==1){
    $resultado=complementar($cadena);
    }
else {
    $resultado= BSS::interpretacion($cadena);
}
return $resultado;
}

//echo(interpretarCa2('0110'));


//--------------------------------------------------------------------------------------------------
public static function complementacion($cadena){
$longitud = strlen($cadena);
    for ($i=($longitud-1);$i>=0;$i--){
        if($cadena[$i]=='1'){
            $cadena[$i]='0';
        }
        else {
        $cadena[$i]='1'; }
    } 
    return $cadena;
}

public static function complementar2($cadena){
    $resultadoFinal= "";
    $resultado=complementacion($cadena);
    $resultado = suma($cadena, 1); 
    $resultadoFinal=BSS::representacion($resultado);
    return $resultadoFinal;
}

public static function representacion($decimal){
$resultado= BSS::representacion($decimal);
    if ($decimal<0){
         $resultado=complementar2($resultado);
    };
    return $resultado;
}

//echo(representarCa2(6));
//--------------------------------------------------------------------------------------------------
}
?>
