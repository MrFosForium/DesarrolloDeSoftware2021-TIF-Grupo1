<?php
include 'bss.php';

//Interpretacion SM
//se ingreso una cadena, saca su signo, calcula y retorna
function interpretacionSM($cadena){

$longitud= strlen($cadena);
$signo= substr($cadena,0,1);
$cadena= substr($cadena,1,$longitud);
$resultado=interpretacion($cadena);
$resultado=ponerSigno($signo,$resultado);
echo("\nInterpretacion ".$resultado);
}

function ponerSigno($signo,$resultado){
if ($signo =="1"){
    $resultado=$resultado*-1;
}
return $resultado;
}

//Representacion SM

function representacionSM($decimal){
    echo("\nEl decimal es: ".$decimal);
    if($decimal < 0){
        echo("\nEl decimal es negativo ".$decimal);
        $decimal = substr($decimal,1,strlen($decimal));
        echo("\nEl decimal es: ".$decimal);
        $decimal = intval($decimal);
        echo("\nEl decimal sin el signo es: ".$decimal);
        $resultado = representacion($decimal);
        echo("\nEl resultado sin signo es: ".$resultado);
        $resultado = '1'.$resultado;
        echo("\nEl resultado es: ".$resultado);
    }else{
        echo("\nEl resultado es positivo: ".$decimal);
        echo("\nY en binario es: ".representacion($decimal));
        return(representacion($decimal));
    }
}

//representacionSM(-5);

//Suma SM
//INCOMPLETO TERMINAR
function sumaSM($cadena1,$cadena2){

    if($cadena1[0] == $cadena2[0]){
        echo("\nLos Signos son iguales :)");
        $signo = $cadena1[0];
        echo("\nEl signo es: ".$signo);

        $cadena1 = substr($cadena1,1,strlen($cadena1));
        echo("\nLa cadena 1 quedo asi: ".$cadena1);
        $cadena2 = substr($cadena2,1,strlen($cadena2));
        echo("\nLa cadena 2 quedo asi: ".$cadena2);
        $cadenaFinal = suma($cadena1,$cadena2);
        echo("\nLa cadenaFinal es: ".$cadenaFinal);
        $longitud = strlen($cadenaFinal);
        echo("\nLa longitud es: ".$longitud);
        $cadenaFinal = str_pad($cadenaFinal, ($longitud+1), $signo, STR_PAD_LEFT);
        echo("\nEl resultado final es: ".$cadenaFinal);
    }
}

sumaSM("101001","111010");

?>