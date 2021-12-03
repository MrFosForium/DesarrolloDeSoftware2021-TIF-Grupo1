<?php
include 'bss.php';

class SM extends BSS{
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
    }else{
        $signoCadena1 = substr($cadena1,0,1);
        echo("\nEl signo de la cadena1 es: ".$signoCadena1);
        $signoCadena2 = substr($cadena2,0,1);
        echo("\nEl signo de la cadena2 es: ".$signoCadena2);
        
        if(interpretacion($cadena1)>=interpretacion($cadena2)){
            echo("\nLa cadena 1 es mayor a la cadena 2");
            $cadenaFinal = resta($cadena1,$cadena2);
            echo("\nLa cadena final vale: ".$cadenaFinal);
            $cadenaFinal = str_pad($cadenaFinal, strlen($cadenaFinal)+1, $signoCadena1, STR_PAD_LEFT);
            echo("\nCadena final con el signo: ".$cadenaFinal);
        }else{
            echo("\nLa cadena 2 es mayor a la cadena 1");
            $cadenaFinal = resta($cadena2,$cadena1);
            echo("\nLa cadena final vale: ".$cadenaFinal);
            $cadenaFinal = str_pad($cadenaFinal, strlen($cadenaFinal)+1, $signoCadena2, STR_PAD_LEFT);
            echo("\nCadena final con el signo: ".$cadenaFinal);
        }
    }
}

//sumaSM("001001","111010");

//Resta SM //Primero pasa las cadenas por suma yluego por resta segun maxi jsjs
function restaSM($cadena1,$cadena2){
    $signo = substr($cadena2,0,1);
    echo("\nEl signo es: ".$signo);
    if($signo>0) $signo = 0; else $signo = 1;
    echo("\nEl signo despues es: ".$signo);
    $cadena2[0] = $signo;
    echo("\nLa cadena 2 quedo: ".$cadena2);
    $resultado = sumaSM($cadena1,$cadena2);
    echo("\nEl resultado es: ".$resultado);
    return $resultado;
}

//Rango SM
function rangoSM($rango){
    $minMaxBinarioSM = array(str_pad("1", $rango, "1", STR_PAD_RIGHT),str_pad("0", $rango, "1", STR_PAD_RIGHT));
    //Para sacar el negativo tengo que usar esta formula −(2n−1 − 1)
    //Para sacar el positivo tengo que usar esta formula 2n−1 − 1
    $minMaxDecimalSM = array(-(pow(2,$rango-1)-1),pow(2,$rango-1)-1);
    echo("\nBinario [".$minMaxBinarioSM[0].",".$minMaxBinarioSM[1]."]");
    echo("\nDecimal [".$minMaxDecimalSM[0].",".$minMaxDecimalSM[1]."]");
}

}

//representacionSM(-5);
//rangoSM(3);

?>