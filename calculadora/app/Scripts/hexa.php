<?php
namespace App\Scripts;
include 'bss.php';

class HEXA extends BSS{
/*Le asigna el valor a cada letra para el hexa*/ 
public static function traducirhexabin($decimal){
    $cadena = '';
    switch($decimal){
        case '1' :
            $cadena = '0001';
            break;
        case '2' :
            $cadena = '0010';
             break;
        case '3' :
            $cadena = '0011';
            break;     
        case '4' :
            $cadena = '0100';
               break;
        case '5' :
            $cadena = '0101';
            break;
        case '6' :
            $cadena = '0110';
                break;
        case '7' :
            $cadena = '0111';
                break;
        case '8' :
            $cadena = '1000';
                break;
        case '9' :
            $cadena = '1001';
                 break;    
        case 'A' :
            $cadena = '1010';
                break;
        case 'A' :
            $cadena = '1010';
                break;
        case 'B':
            $cadena = '1011';
                break;
        case 'C':
            $cadena = '1100';
                break;
        case 'D':
            $cadena = '1101';
                break;
        case 'E':
            $cadena = '1110';
                break;
        case 'F':
            $cadena = '1111';
                break;
}

return $cadena;

}


public static function traducirBinHexa($cadena){
    $decimal ="";
    switch($cadena){
        case '0000' :
            $decimal = '0';
            break;
        case '0001' :
            $decimal = '1';
                break;
        case '0010' :
            $decimal = '2';
             break;
        case '0011' :
            $decimal = '3';
            break;     
        case '0100' :
            $decimal = '4';
               break;
        case '0101' :
            $decimal = '5';
            break;
        case '0110' :
            $decimal = '6';
                break;
        case '0111' :
            $decimal = '7';
                    break;
        case '1000' :
            $decimal = '8';
                    break;
        case '1001' :
            $decimal = '9';
                     break;    
        case '1010' :
            $decimal = 'A';
            
            break;
        case '1011':
            $decimal = 'B';
            break;
        case '1100':
            $decimal = 'C';
            break;
        case '1101':
            $decimal = 'D';
            break;
        case '1110':
            $decimal = 'E';
            break;
        case '1111':
            $decimal = 'F';
        break;
}

return $decimal;

}

//Pasa la cadena a Binario
public static function interpretacion($cadena){
  
    $binario = "";
    $longitud = strlen($cadena);
    for ($i=0;$i<$longitud;$i++){
        $binario .= self::traducirhexabin($cadena[$i]); 
    }

 return BSS::interpretacion($binario);
}
// echo interpretar("AA");

// Agarra el decimal,lo pasa a BSS  agarra bloques de 4 y los pasa a hexa
public static function representacion($decimal){
 $cadenaBSS = BSS::representacion($decimal);
$hexa  =""; 
$longitud=strlen($cadenaBSS);
if ($longitud % 4!=0){
    $cadenaBSS=str_pad($cadenaBSS, $longitud+ (4-$longitud % 4), "0", STR_PAD_LEFT);
}
$pedazos = str_split($cadenaBSS,4);
foreach ($pedazos as $pedazo) {
    $hexa .= self::traducirBinHexa($pedazo); 
}
  return $hexa;  
}
    

}
?>