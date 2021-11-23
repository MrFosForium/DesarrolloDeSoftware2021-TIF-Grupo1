<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8"/>
     <title>Calculadora</title>
     <link rel="stylesheet" href="estilo2.css"/>
     <script rel="stylesheet" src="operacion.js"></script>
    
   </head>
   
   <body>
      
      <main class="perfil">
       <h2 style="text-align: center; color: #2a6cc2;font-size: 50px; font: italic bold 50px Georgia, Serif; " class="titulo2">Datos personales</h2><br><br>

        



      </main>
     
      <header>
         <div class="menus">
           <?php          
               echo "<nav class='menu'>
                  <a href='cerrar.php'>Cerrar</a>
                  </nav>";
                   
                ?>
                <div class="container">
                  <p class="text">Calculadora Arimetica</p>
                </div>
       </div>
    </header>

      <main>
            <h3 style="font-size: 600%; line-height: 500%; color:rgb(0, 0, 0);  text-align: center;">Calculadora</h3>


            <form  class="form" action="Calc.php" method="post"><br>
               <select  name="Snum">
                 <option value="" selected="selected"> Sistema Numerico </option>
                 <option value="BSS"> Binario sin signo</option>
                 <option value="CA2"> Complemento a 2</option>
                 <option value="SM"> Signo</option>
                 <option value="EX"> Exceso</option>
                 <option value="HEX"> Hexadecimal</option>
                 <option value="OCT"> Octadecimal</option>
              </select>
   
              <select  name="Operacion">
                <option value="" selected="selected"> Operacion </option>
                <option value="Int"> Interpretacion</option>
                <option value="Rep"> Representacion</option>
                <option value="Rango">  Rango</option>
                <option value="Suma">  Suma</option>
                <option value="Resta"> Resta</option>
             </select>
             
             <p>cantidad:  <input  type="number" class="login-input2" name="cantidad"></p>
             <input  type="text" class="login-input" name="operando" placeholder="Ingresa tu tipo de Operacion"/>
             <input class="boton"  type="submit" name="submit" value="calcular" class="login-button"><br><br>
             <input style="background: rgb(123, 149, 182); color: black;" type="text" class="login-input" name="Resultado" disabled/>
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

      <h2 style="font-size: 500%; line-height: 500%; color: rgb(0, 0, 0); text-align: center; top: 100%;" class="subtitulo">Creditos Estudiantil</h2><br>

      <section  style="background-color: rgb(228, 228, 228);" class="creditos">
         <figure>
            <img src="1.png" alt="">
            <div class="capa">
               <h3>Francisco Castellanos</h3>
               <p>Se encargo sobre el grafico del sistema y tambien el almacenamiento de datos.</p>
            </div>
         </figure>
       
         <figure>
            <img src="2.png" alt="">
            <div class="capa">
               <h3>Luis Vargas Otero</h3>
               <p>Realizo las operaciones restas, sumas y rango.</p>
            </div>
         </figure>
       
         <figure>
            <img src="3.png" alt="">
            <div class="capa">
               <h3>Emiliano Dominguez</h3>
               <p>Realizo tanto los sistemas numericos como tambien en el desarollo de Laravel.</p>
            </div>
         </figure>
       
          <figure>
             <img src="4.png" alt="">
              <div class="capa">
                <h3>Luciano Azzaro</h3>
                <p>Realizo un conjunto de sistema numericos, representación e interpelación y los diagramas.</p>
             </div>
          </figure>
       
          <figure>
             <img src="5.png" alt="">
              <div class="capa">
                <h3>Matias Olazar Romero</h3>
                <p>Realizo la operacion de Hexadecimal y Octadecimal.</p>
              </div>
          </figure> 

       </section><br>

       <h2 style="font-size: 500%; line-height: 500%; color: rgb(0, 0, 0); text-align: center; top: 100%;" class="subtitulo">Creditos Especiales</h2><br>


         <section class="creditos" style="background-color: #12c2e9; /* fallback for old browsers */ background: -webkit-linear-gradient(to right, #12c2e9, #c471ed, #f64f59); /* Chrome 10-25, Safari 5.1-6 */ background: linear-gradient(to right, #12c2e9, #c471ed, #f64f59); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
      
            <figure>
             <img src="" alt="">
              <div class="capa">
                  <h3>Maximiliano Diaz</h3>
                  <p class="docente">Dedicado a la formacion desiplinaria sobre el taller del proyecto, impartiendo su conocimiento hacia la elaboracion de sus respectivo riesgos, diagramas, etc de este mismo. Para que los AlumnXs reflexionen, evaluar su situación y por sobre todo cumplir con las oportunidades, eficiencia y objetivos previstos pora lograr la propuesta.</p>
               </div>
           </figure>
       
           <figure>
             <img src="6.png" alt="">
               <div class="capa">
                <h3>Flavia Fernandez</h3>
                  <p class="docente">Dedicada a orientar, guiar y dar su conocimiento acerca de las actividades para los alumnXs, siendo un elemento importante y necesario para articular la calidad del desarrollo del proyecto.</p>
               </div>
          </figure>
          </section>

   </body>
</html>
