<?php
include 'bss.php';

class EX extends BSS {
function representacionEX($entero,$caracteres,$exceso){
    $resultado = $entero+$exceso;
    echo("\nEl resultado es: ".$resultado);
    representacion($resultado);
    echo("\nLa representacion es: ".representacion($resultado));
}

function interpretacionEx($laCadena){
    $nBits = strlen($laCadena);
    $elDecimal =  interpretacion($laCadena) -$nBits ;
    echo "el resultado de la cadena es".$elDecimal;

}
}
interpretacionEx("111");
?>