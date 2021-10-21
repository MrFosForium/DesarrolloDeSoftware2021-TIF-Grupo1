<?php
include 'bss.php';
/*Le asigna el valor a cada letra para el hexa*/ 
function traducirhexabin($decimal){
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


function traducirBinHexa($cadena){
    switch($cadena){
        case '0001' :
            $decimal = '1';
            break;
        case '0010' :
            $decimal = '2';
             break;
        case '0011' :
            $decimal = '3';
            break;     
        case '0011' :
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
        case 'C':
            $decimal = '1100';
            break;
        case 'D':
            $decimal = '1101';
            break;
        case 'E':
            $decimal = '1110';
            break;
        case 'F':
            $decimal = '1111';
        break;
}

return $decimal;

}


function interpretar($cadena){
  
    $binario = "";
    $longitud = strlen($cadena);
    for ($i=0;$i<$longitud;$i++){
        $binario .= traducirhexabin($cadena[$i]); 
    }

 return interpretacion($binario);
}
// echo interpretar("AA");


function representacionhexa($decimal){
 $cadenaSS = representacion($decimal);
// echo "bss del decimal". $cadenaSS ;
$hexa  =""; 
$longitud=strlen($cadenaSS);
for ($i=0;$i<$longitud;$i++){
    return $hexa .= traducirBinHexa($cadenaSS[$i]); 
    
}
    
    }
    echo representacionhexa(10);



/*function representar($decimal){
$valor = "";
$longitud = strlen($decimal);
for ($i=0;$i<$longitud;$i++){ 
    $valor = traducirBinHexa($decimal); 
}
 return representacion($valor);
}

echo representar("0001");

/*
function hexareinter($cadena){

    $longitud = strlen($cadena);
 //   echo("cantidad de caracteres es de".$losngitud. " caracteres ");
    $posicion = 0;
    $decimal = 0;

    

    for ($i=($longitud-1);$i>=0;$i--){

        if(detectar($cadena[$i]));{
            interConLetras($cadena);
        }
        
        $decimal += intval($cadena[$i]) * pow(16 ,$posicion);
        $posicion+=1;
        }
    
}
    echo("El decimal es ".$decimal);
}

    
*/

 




?>