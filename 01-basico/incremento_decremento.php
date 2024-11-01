<?php

/**
 * 
 * Operadores de incremento y decremento
 * 
 * simbolo          nombre
 * ++               Incremento
 * --               Decremento
 * 
 * Ejemplo
 * 
 * ++$variable      Pre-incremento
 * --$variable      Pre-decremento
 */

 $numero = 10;
 echo "numero inicial: ". $numero;
 echo "<br>";

 //Pre incremento: primero incrementa y luego realiza la operacion
 echo "Pre incremento ".++$numero;
 echo "<br>";

 //Post incremento: primero realiza la operacion y luego incrementa
 echo "Post incremento ".$numero++;
  echo "<br>";

  echo "numero " .$numero;
  echo "<br>";

  //Pre decremento: primero resta y luego realiza la operacion
  echo "Pre decremento ".--$numero;
  echo "<br>";

  echo "Post decremento ".$numero--;
  echo "<br>";

  $resultado = ++$numero;
  echo "primero hace la operacion y luegolo asigna: " .$resultado;

  echo "<br>";

  $resultado = $numero++; //operador unario
  echo "Primero le asigna un valor y luego hace la operacion" .$resultado;