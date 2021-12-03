<?php 
use  PHPUnit\Framework\TestCase;
require('src/Ca2.php');


final class Ca2Test extends TestCase{
    //Atributos
    private $ca2;
    //Metodoss
    public function testCa2SumaConNumeroDeBits(){
        $ca2 = new Ca2();
        $this->assertEquals(111, $ca2->sumaCa2(3,'101','1010'));
    }

    public function testCa2SumaNegativaConNumeroDeBits(){
        $ca2 = new Ca2();
        $this->assertEquals(101, $ca2->sumaCa2(3,'-1010','-1011'));
    }

    public function testCa2SumaNegativaSinNumeroDeBits(){
        $ca2 = new Ca2();
        $this->assertEquals(10101, $ca2->sumaCa2(0,'-1010','-1011'));
    }
    
    public function testCa2restaConNumeroDeBits(){
        $ca2 = new Ca2();
        $this->assertEquals(101, $ca2->restaCa2(3,'1010011','1101'));
    }

    public function testCa2interpretarCadena0101(){
        $ca2 = new Ca2();
        $this->assertEquals(5, $ca2->interpretarCa2('0101'));
    }

    public function testCa2interpretarCadena1111(){
        $ca2 = new Ca2();
        $this->assertEquals(-8, $ca2->interpretarCa2('1111'));
    }
    

    public function testCa2representarNumero(){
        $ca2 = new Ca2();
        $this->assertSame('110', $ca2->representarCa2(6));
    }

    public function testCa2representarNumeroNegativo(){
        $ca2 = new Ca2();
        $this->assertSame('110', $ca2->representarCa2(-6));
    }
}

?>