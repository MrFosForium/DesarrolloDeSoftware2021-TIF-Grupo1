<?php
namespace App\Scripts;
include 'bss.php';

class EX extends BSS {
public static function representacion($entero,$caracteres,$exceso){
    $resultado = $entero+$exceso;

    return (BSS::representacion($resultado));
}

public static function interpretacion($laCadena){
    $nBits = strlen($laCadena);

    return ($elDecimal =  BSS::interpretacion($laCadena) -$nBits);
}
}

?>