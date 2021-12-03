<?php
namespace App\Scripts;

class BSS {
//Suma
//Se ingresa dos cadenas binarias, se suman y se retorna el resultado
public static function suma($cadena1, $cadena2){
    $resto = 0;
    $resultado = '';
    
    $longitud = max(strlen($cadena1),strlen($cadena2));
    
    $cadena1= str_pad($cadena1, $longitud, "0", STR_PAD_LEFT);
    $cadena2= str_pad($cadena2, $longitud, "0", STR_PAD_LEFT);
    
    for($a = ($longitud-1); $a>=0; $a--){
    
        $sumaPosicion =intval($cadena1[$a]) + intval($cadena2[$a])+ $resto;
    
            switch ($sumaPosicion) {
                case 0:
                    $resultado =  "0".$resultado;
                    $resto= 0;
                    break;
                case 1:
                    $resultado =  "1".$resultado;
                    $resto= 0;
                    break;
                case 2:
                    $resultado =  "0".$resultado;
                    $resto= 1;
                    break;
                case 3:
                    $resultado =  "1".$resultado;
                    $resto= 1;
                    break;
    
    
        }
    
    }
    $resultado =  ($resto>0?"1":"").$resultado;
    
    return $resultado;
    
}

//Resta
//Se ingresan dos cadenas binarias, se restan y se retorna el resultado
public static function resta($cadena1,$cadena2){
    $resto = 0;
    $resultado = '';
    $longitud = max(strlen($cadena1),strlen($cadena2));

    $cadena1= str_pad($cadena1, $longitud, "0", STR_PAD_LEFT);
    $cadena2= str_pad($cadena2, $longitud, "0", STR_PAD_LEFT);

    for($a = ($longitud-1); $a>=0; $a--){

        $restaPosicion =abs($resto - intval($cadena1[$a])) - intval($cadena2[$a]);

        switch($restaPosicion){
            case 0:
                $resultado = "0".$resultado;
                $resto = 0;
                break;
            case -1:
                $resultado = "1".$resultado;
                $resto = 1;
                break;
            case 1:
                $resultado = "1".$resultado;
                $resto = 0;
                break;
        }

    }

    $resultado =  ($resto>0?"1":"").$resultado;

    return strrev($resultado);

}

//resta(1010011,1101);

//Interpretacion
//Se ingresa una cadena binaria, se pasa a decimal y luego se retorna
public static function interpretacion($cadena){
$decimal = 0;
$posicion = 0;
$longitud = strlen($cadena);
for ($i=($longitud-1);$i>=0;$i--){
    $decimal += intval($cadena[$i]) * pow(2 ,$posicion);
    $posicion+=1;
}
return $decimal;
}

//Representacion
//Se ingresa un decimal, se pasa a binario sin signo y luego se retorna 
public static function representacion($decimal){
$cadena = '';
$resultado = $decimal;
do{
    $cadena.=fmod($resultado,2);
    $resultado =floor($resultado /2);
}while($resultado> 0);
    return strrev($cadena);
}

//Rango
//Limita la cantidad de caracteres

public static function rango($rango){
    $minMaxDecimal = array(0);
    $minMaxDecimal[1] = pow(2,$rango)-1;

    $minMaxBinario = array(str_pad("0", $rango, "0", STR_PAD_LEFT),str_pad("1", $rango, "1", STR_PAD_LEFT));
}

}

?>