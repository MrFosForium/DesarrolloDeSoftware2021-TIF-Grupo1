<?php
   
   /* Limita el numero de caracteres  */

    $cadena= "0101011101010101110011001110";
    $ponerUnRango ="rango" ; 
    $limite = $ponerUnRango;
    $tamaño = strlen ($cadena);
    
    if($tamaño <= $limite){
        echo $cadena;

    }
    else{
        $nuevotexto = trim (substr($cadena, 0, $limite)). "...";
        echo $nuevotexto;
    }
    
?>