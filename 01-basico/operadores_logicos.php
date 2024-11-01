<?php

/**
 * 
 * -------Simbolo-----------Nombre----------
 *        and               and (y)
 *        or                or (0)
 *        !                 not (no)
 *        &&                and (y)
 *        ||                or (o)
 * 
 * 
 * -------Tabla de operadores AND
 * Expresion1         Exprecion2          Resultado
 * false      &&        false             false
 * false      &&        true              false
 * true       &&        true              true
 * true       &&        false             false
 */

 $valor1 = 7;
 $valor2 = 2;

 print("Operador or");
 echo "<br>";
 var_dump($valor1 == 7 && 2 >3);
 echo "<br>";
 var_dump($valor1 == 7 && 9 >3);
 echo "<br>";

 /**
  * ----------Tabla de operador or
  * Expresion1         Exprecion2          Resultado
  * false        ||     false               false
  * false        ||     true                true
  * true         ||     false               true
  * true         ||     true                true
  */
 print("Operador or");
 echo "<br>";
 var_dump($valor1 == 7 or 2 >3);
 echo "<br>";
 var_dump($valor1 == 7 || 9 >3);
 echo "<br>";
 var_dump($valor1 == 7 or 2 >3);
 echo "<br>";
 var_dump($valor1 == 5 || 1 >3);



 /**
  * 
  *------------------------- Tabla de operador NOT
  *
  *Expresion  !               Resultado
  *¡False                        True
  *!true                        False
  */
 echo "<br>";
  var_dump(!($valor1 >= $valor1));