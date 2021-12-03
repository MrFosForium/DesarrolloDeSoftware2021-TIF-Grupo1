<?php
namespace App\Scripts;
include 'bss.php';

class SM extends BSS{
//Interpretacion SM
//se ingreso una cadena, saca su signo, calcula y retorna
public static function interpretacion($cadena){

$longitud= strlen($cadena);
$signo= substr($cadena,0,1);
$cadena= substr($cadena,1,$longitud);
$resultado=BSS::interpretacion($cadena);
if ($signo =="1"){
    $resultado=$resultado*-1;
}

return($resultado);

}

/*public static function ponerSigno($signo,$resultado){
if ($signo =="1"){
    $resultado=$resultado*-1;
}
return $resultado;
}*/

//Representacion SM

public static function representacion($decimal){
    if($decimal < 0){
        $decimal = substr($decimal,1,strlen($decimal));
        $decimal = intval($decimal);
        $resultado = BSS::representacion($decimal);
        $resultado = '1'.$resultado;
        return($resultado);
    }else{
        return(BSS::representacion($decimal));
    }
}

//representacionSM(-5);

//Suma SM
public static function suma($cadena1,$cadena2){

    if($cadena1[0] == $cadena2[0]){
        $signo = $cadena1[0];

        $cadena1 = substr($cadena1,1,strlen($cadena1));
        $cadena2 = substr($cadena2,1,strlen($cadena2));
        $cadenaFinal = BSS::suma($cadena1,$cadena2);
        $longitud = strlen($cadenaFinal);
        $cadenaFinal = str_pad($cadenaFinal, ($longitud+1), $signo, STR_PAD_LEFT);

        return($cadenaFinal);
    }else{
        $signoCadena1 = substr($cadena1,0,1);
        $signoCadena2 = substr($cadena2,0,1);
        
        if(BSS::interpretacion($cadena1)>=BSS::interpretacion($cadena2)){
            $cadenaFinal = BSS::resta($cadena1,$cadena2);
            $cadenaFinal = str_pad($cadenaFinal, strlen($cadenaFinal)+1, $signoCadena1, STR_PAD_LEFT);
            
            return($cadenaFinal);
        }else{
            $cadenaFinal = BSS::resta($cadena2,$cadena1);
            $cadenaFinal = str_pad($cadenaFinal, strlen($cadenaFinal)+1, $signoCadena2, STR_PAD_LEFT);

            return($cadenaFinal);
        }
    }
}

//sumaSM("001001","111010");

//Resta SM //Primero pasa las cadenas por suma yluego por resta segun maxi jsjs
public static function resta($cadena1,$cadena2){
    $signo = substr($cadena2,0,1);
    if($signo>0) $signo = 0; else $signo = 1;
    $cadena2[0] = $signo;
    $resultado = BSS::suma($cadena1,$cadena2);
    return $resultado;
}

//Rango SM
public static function rango($rango){
    $minMaxBinarioSM = array(str_pad("1", $rango, "1", STR_PAD_RIGHT),str_pad("0", $rango, "1", STR_PAD_RIGHT));
    //Para sacar el negativo tengo que usar esta formula −(2n−1 − 1)
    //Para sacar el positivo tengo que usar esta formula 2n−1 − 1
    $minMaxDecimalSM = array(-(pow(2,$rango-1)-1),pow(2,$rango-1)-1);
}

}

//representacionSM(-5);
//rangoSM(3);

?>