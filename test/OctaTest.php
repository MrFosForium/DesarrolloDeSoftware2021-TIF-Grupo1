
<?php

    use PHPUnit\Framework\TestCase;
        require ('src/octa.php');


class OctaTest extends TestCase{

    //atributos
     private $octa;

     //metodo
        //Prueba si funciona la interpretacion
    public function testOctaIt(){
        $octa = new Octa();
        $this-> assertEquals(4169, $octa-> octaInterpretacion('10111'));
    }


    //Prueba si funciona la representacion
    public function testOctaRp(){
        $octa = new Octa();
        $this-> assertSame('10111', $octa-> octaRepresentacion(4169));
    }


//Errores
    //Da error si es cadena negativa
    public function testOctaItCadenaNegativa(){
        $octa = new Octa();
        $this-> assertEquals(520, $octa-> octaInterpretacion('1010'));
    }
    //Da error si manda numero negativo
    public function testOctaItNegativo(){
        $octa = new Octa();
        $this-> assertEquals(null,$octa-> octaInterpretacion('-12'));
    }
    //Da error si hay letras
    public function testOctaItLetras(){
        $octa = new Octa();
        $this-> assertEquals('jujujaja',$octa-> octaInterpretacion('AAA'));
    }
    //dA ERROR SI hay letras con numeros
    public function testOctaItLetrasyNum(){
        $octa = new Octa();
        $this-> assertEquals(null, $octa-> octaInterpretacion('A2B3C4'));
    }
    
    //Da error si esta vacio
    public function testOctaItvacio(){
        $octa = new Octa();
        $this-> assertEquals(11, $octa-> octaInterpretacion(null));
    }
    //Da error si esta vacio
    public function testOctaRPvacio(){
        $octa = new Octa();
        $this->assertEquals(11,$octa-> octaRepresentacion(null));
    }

    //Da error si hay letras
    public function testOctaRPLetras(){
        $octa = new Octa();
        $this-> assertEquals('CheCapoTenesUnasLetras', $octa-> octaRepresentacion('ABCD'));
    }
    

    //DA ERROR SI  HAY letras y num 
    public function testOctaRPLetrasYNum(){
        $octa = new Octa();
        $this-> assertEquals(null, $octa-> octaRepresentacion('A1B2C3'));
    }
    //Da error si se manda un numero negativo
    public function testOctaRPNumNegativo(){
        $octa = new Octa();
        $this-> assertEquals(null, $octa-> octaRepresentacion(-25));
    }


}



?>  