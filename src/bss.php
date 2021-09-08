<?php

//BSS

//Suma
//Se ingresa dos cadenas binarias, se suman y se retorna el resultado
function suma($cadena1, $cadena2){
$resto = false;
$resultado = '';
$longitud = max(strlen($cadena1),strlen($cadena2));
echo("echo longitud = "+$longitud);

for($a = ($longitud-1); $a>=0; $a--){
    if($resto = false){
       if(($cadena1[$a] + $cadena2[$a]) == 2 || ($cadena1[$a] + $cadena2[$a]) == 0){
            if(($cadena1[$a] + $cadena2[$a]) == 2) $resto = true;
            $resultado = $resultado + 0;
            echo("echo resultado if = "+$resultado);
        }else{
            $resultado = $resultado + 1;
            echo("echo resultado else = "+$resultado);
        }
    }else{
        if(($cadena1[$a]+1) == 2) $cadena1[$a] = 0; else $resto = false;
        $resultado = $resultado + ($cadena1[$a]+$cadena2[$a]);
    }
}

echo("echo resultado final return = "+$resultado);
return strrev($resultado);

}

//Resta
//Se ingresan dos cadenas binarias, se restan y se retorna el resultado
function resta($cadena1,$cadena2){
$resto = false;
$resultado = '';
$longitud = max(strlen($cadena1),strlen($cadena2));
//Falta terminar todo esto literalmente es un copy paste de la suma
for($a = ($longitud-1); $a>=0; $a--){
    if($resto = false){
       if(($cadena1[$a] + $cadena2[$a]) == 2 || ($cadena1[$a] + $cadena2[$a]) == 0){
            if(($cadena1[$a] + $cadena2[$a]) == 2) $resto = true;
            $resultado = $resultado + 0;
            echo("echo resultado if = "+$resultado);
        }else{
            $resultado = $resultado + 1;
            echo("echo resultado else = "+$resultado);
        }
    }else{
        if(($cadena1[$a]+1) == 2) $cadena1[$a] = 0; else $resto = false;
        $resultado = $resultado + ($cadena1[$a]+$cadena2[$a]);
    }
}
}

//Se ingresa una cadena binaria, se pasa a decimal y luego se retorna
function interpretacion($cadena){
$decimal = 0;
$posicion = 0;
$longitud = strlen($cadena);
for ($i=($longitud-1);$i>=0;$i--){
    $decimal += intval($cadena[$i]) * pow(2 ,$posicion);
    $posicion+=1;
}
return $decimal;
}

//Se ingresa un decimal, se pasa a binario sin signo y luego se retorna 
function representacion($decimal){
$cadena = '';
$resultado = $decimal;
do{
    $cadena.=fmod($resultado,2);
    $resultado =floor($resultado /2);
}while($resultado> 0);
    return strrev($cadena);
}
?>