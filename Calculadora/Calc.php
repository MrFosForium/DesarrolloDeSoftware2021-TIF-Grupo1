<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8"/>
     <title>Calculadora</title>
     <link rel="stylesheet" href="estilo2.css"/>
     <script rel="stylesheet" src="operacion.js"></script>
    </head>
    <body>
        <img src="Logo.png"> 
        <a href="cerrar.php"><p class="text-info">Cerrar</p></a><br>
        <h1 class="titulo">Bienvenido a la Calculadora</h1> 

        <p>Es un sistemas matemático creado por miembros de la orientacion Programacion de la Escuela Secundaria de Educacion Tegnica de la U.n.q (Univercidad Nacional de Quilmes)
         </p>

         <p>Este mismo permite realizar diferentes operaciones tales como: La suma, resta, interpelación, representación, rango en diferentes sistemas
            numéricos <br>( binario sin signo, complemento a 2, signo magnitud, exceso, hexadecimal,
            octogonal).
         </p>
         
         
       <form class="form" action="Calc.php" method="post"><br>
            <select  name="Snum">
              <option value="" selected="selected"> Sistema Numerico </option>
              <option value="BSS"> Binario sin signo</option>
              <option value="CA2"> Complemento a 2</option>
              <option value="SM"> Signo</option>
              <option value="EX"> Exceso</option>
              <option value="HEX"> Hexadecimal</option>
              <option value="OCT"> Octadecimal</option>
           </select><br>

           <select  name="Operacion">
            <option value="" selected="selected"> Operacion </option>
            <option value="Int"> Interpretacion</option>
            <option value="Rep"> Representacion</option>
            <option value="Rango">  Rango</option>
            <option value="Suma">  Suma</option>
            <option value="Resta"> Resta</option>
         </select><br><br>

         <input  type="text" class="login-input" name="Operando" placeholder="Ingresa tu tipo de Operacion"/><br>

         <input class="boton"  type="submit" name="submit" value="Calcular" class="login-button"><br>

         <input type="text" class="login-input" name="Resultado" disabled/><br>


        </form>
   </body>
</html>