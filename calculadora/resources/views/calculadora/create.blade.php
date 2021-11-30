@extends('layouts.plantilla')
@section('contenido')
<link rel="stylesheet" href="<?php echo asset('css/estilo2.css')?>" type="text/css">

            <div class="header">               
               <h1>Calculadora Aritmetica</h1>
            </div>

      <main>
            <form class="form" action="/calcular" method="post"><br>
                @csrf
               <select class="select-SN" id="Sistema_Numerico" name="Sistema_Numerico">
                 <option value="" selected="selected">Sistema Numerico </option>
                 <option value="BSS">Binario sin signo</option>
                 <option value="CA2">Complemento a 2</option>
                 <option value="SM">Signo</option>
                 <option value="EX">Exceso</option>
                 <option value="HEX">Hexadecimal</option>
                 <option value="OCT">Octadecimal</option>
              </select>
              <input type="number" class="login-input2" id="Cantidad_Digitos" name="Cantidad_Digitos">
   
              <select id="Operacion" name="Operacion">
                <option value="" selected="selected"> Operacion </option>
                <option value="Int">Interpretacion</option>
                <option value="Rep">Representacion</option>
                <option value="Rango">Rango</option>
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
             </select>
             
             <input type="text" class="login-input" id="Operando" name="Operando" placeholder="Ingresa el tipo de operando"/>
             <input type="text" class="login-input" id="Primer_Cadena" name="Primer_Cadena" placeholder="Ingresa la primer cadena"/>
             <input type="text" class="login-input" id="Segunda_Cadena" name="Segunda_Cadena" placeholder="Ingresa la segunda cadena"/><br>
             <input class="login-button" type="submit" name="submit"><br>
             <div style="background: rgb(123, 149, 182); color: black;" type="text" class="login-input" name="Resultado">
               {{  session('info')  }}
             </div>
           </form><br>

           <section class="inf">
            <div class="info">
               <h2>Que hace ?</h2>
                <p>Permite realizar diferentes operaciones tales
                   como la suma, resta, interpelación, representación, rango en diferentes sistemas
                   numéricos ( binario sin signo, complemento a 2, signo magnitud, exceso, hexadecimal,
                   octogonal).
                  </p>
            </div>
         </section>
     </main>
     <script src="php/bss.php"></script>
     <script src="php/Ca2.php"></script>
     <script src="php/EX.php"></script>
     <script src="php/hexa.php"></script>
     <script src="php/octa.php"></script>
     <script src="php/SM.php"></script>
@endsection