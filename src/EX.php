<?php
include 'bss.php'

function representacionEX($entero,$caracteres,$exceso){
    $resultado = $entero+$exceso;
    echo("\nEl resultado es: ".$resultado)
    representacion($resultado);
    echo("\nLa representacion es: ".representacion($resultado));
}
?>