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
         $resultado = complementar2($resultado);
    }
    return $resultado;
}



//--------------------------------------------------------------------------------------------------

function numeroDeBits($nroBits,$cadena){
    $x =strlen($cadena);
    if($x>$nroBits){
        $nuevaCadena=substr($cadena,-$nroBits);
       return $nuevaCadena;
    }
    else{
        return $cadena;
    }

}
function sumaCa2($nroBits,$cadena1,$cadena2){
 $resultadoSuma=suma($cadena1, $cadena2);
 $restringirBits =numeroDeBits($nroBits,$resultadoSuma);
 return $restringirBits;

 }

 function restaCa2($nroBits,$cadena1,$cadena2){
  $resultadoResta=resta($cadena1,$cadena2);
  $restringirBits = numeroDeBits($nroBits,$resultadoResta);
  return $restringirBits;
 }
 
//--------------------------------------------------------------------------------------------------
}
?>
