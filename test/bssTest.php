<?php
use PHPUnit\Framework\TestCase;
require('src/bss.php');

class BssTest extends TestCase
{
    //Atributos
    private $bss;
    //Metodos
    public function testInterpretacion010esIgualA2(){
        $bss = new BSS();
        $this->assertEquals(2, $bss->interpretacion('010'));
 
    }

    public function testRepresentacion100esIgual11110(){
        $bss = new BSS();
        $this-> assertSame($bss->representacion(100),'1100100');
 
    }

    public function testInterpretacion1010esIgual2(){
        $bss = new BSS();
        $this->assertEquals(10, $bss->interpretacion('1010'));
 
    }

    public function testRepresentacion6EsIgualA110(){
        $bss = new BSS();
        $this->assertSame('110', $bss->representacion(6));
 
    }

    public function testSumaDosCadenaBinarias(){
        $bss = new BSS();
        $this->assertEquals(1111, $bss->suma('101','1010'));
 
    }

    public function testSumaDosCadenaBinariasNegativas(){
        $bss = new BSS();
        $this->assertEquals(1111, $bss->suma('-101','-1010'));
 
    }

    public function testSumaDosCadenasConLetras(){
        $bss = new BSS();
        $this->assertEquals(0, $bss->suma('DFFFF','DSESS'));
 
    }
}

?>
