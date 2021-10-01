
<?php

/*Le asigna el valor a cada letra para el hexa*/ 
function letrasANros(){
    $lasLetras = [ 
    "a"=>"10", "b"=>"11",
    "c"=>"12", "d"=>"13", 
    "e"=>"14", "f"=>"15",
    ];
    
}
function traductor($decimal){
    $resultado ="";

    if($decimal<10){
        $resultado = $decimal;  
    }else{
        $resultado = letrasANros($decimal); 
        
    }
    return $resultado ;
    
}

function hexa ($cadena){

    $longitud = strlen($cadena);
    echo("cantidad de caracteres es de".$longitud. " caracteres ");
    $posicion = 0;
    $decimal = 0;

    for ($i=($longitud-1);$i>=0;$i--){
        $decimal += intval($cadena[$i]) * pow(16 ,$posicion);
        $posicion+=1;
    }
    traductor($decimal);
    echo("El decimal es ". $decimal);
}
    

hexa("10110");



?>

