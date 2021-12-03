<?php
use PHPUnit\Framework\TestCase;
require ('src/octa.php');


class HexaTest extends TestCase{

    //atributos
     private $hexa;

     //metodo

    public function  TestHexaItConLetraTest(){
        $hexa = new hexa();
        $this-> assertEquals(11259375, $hexa-> interpretar("ABCDF"));
    }

    public function HexaRpConLetraTest(){
        $hexa = new hexa();
        $this-> assertEquals("ABCDF", $hexa-> representacionhexa(11259375));
    }


    public function HexaItTest(){
        $hexa = new hexa();
        $this-> assertEquals(65809, $hexa-> interpretar("10111"));
    }


    public function HexaRpTest(){
        $hexa = new hexa();
        $this-> assertEquals("10111", $hexa-> interpretar(65809));
    }

}
?>  