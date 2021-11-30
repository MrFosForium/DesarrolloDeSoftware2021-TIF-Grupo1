<?php
include 'bss.php';
<<<<<<< HEAD

class CA2 extends BSS{
=======
Class Ca2{
>>>>>>> c14c384c4c76ebad96241ce5ebfb7b672e848a74
function complementar($cadena){
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
    $resultadoFinal=interpretacion($resultado)*-1;
    return $resultadoFinal;
}
//echo(complementar('1010'));

function interpretarCa2($cadena){
$x = substr($cadena,0,1);
if ($x==1){
    $resultado=complementar($cadena);
    }
else {
    $resultado= interpretacion($cadena);
}
return $resultado;
}

//echo(interpretarCa2('0110'));


//--------------------------------------------------------------------------------------------------
function complementacion($cadena){
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

function complementar2($cadena){
    $resultadoFinal= "";
    $resultado=complementacion($cadena);
    $resultado = suma($cadena, 1); 
    $resultadoFinal=representacion($resultado);
    return $resultadoFinal;
}

function representarCa2($decimal){
$resultado= representacion($decimal);
    if ($decimal<0){
         $resultado=complementar2($resultado);
    }
    return $resultado;
}

echo(representarCa2(6));
//--------------------------------------------------------------------------------------------------
}
?>
