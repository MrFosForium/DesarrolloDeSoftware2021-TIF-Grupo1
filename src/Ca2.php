<?php
include 'bss.php';
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

echo(interpretarCa2('0110'));
function complemento2($cadena){
    interpretarCa2($cadena);
}
?>