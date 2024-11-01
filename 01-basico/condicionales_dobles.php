<?php

/**
 * Esctructura condicional doble (if else)
 * 
 * if(exprecion){
 *  codigo a ejecutar si la expresion es verdadera
 * }else{
 *  codigo a ejecutar si la condicion es falsa
 * }
 * 
 * if (exprecion):
 *  si es verdadera
 * else:
 *  si es falsa
 * endif;
 */

 if (1 > 7){
  echo "Condicion evalua a true";
 }else{
  echo "Condicion evalua a false";
 }

echo "<br>";

 if (9==12):
  echo "Condicion evalua a verdadero";
 else:
  echo "Condicion evalua a false";
 endif;

 //Calcular el total que una persona debe pagar en un montallantas, el precio de cada llanta es de 800 si se compran menos de 5 llantas y de 700 si se compran 5 o mas llantas
echo "<br>";

 $llantas = 2;

 if ($llantas < 5){
  $precio = $llantas * 800;
  echo "El precio de las {$llantas} llantas es de {$precio}";
 }else{
  echo "El precio de las {$llantas} llantas es de {$precio}";
 }

echo "<br>";
 //Determinar si un alumno reprueba o aproba un curso, sabiendo que aprobara si su promedio de 3 , caso contario reprueba

 $cali1 = 3;
 $cali2 = 3;
 $cali3 = 3;

 $promedio = ($cali1 + $cali2 + $cali3) / 3;

 if ($promedio >= 3){
  echo "con el promedio {$promedio} el estudiante aprueba el curso";
 }else{
  echo "con el promedio {$promedio} el estudiante reprueba el curso";
 }

 echo "<br>";
// (8 >= 10)? echo "verdadero": echo "es falso";

/**
 * Operador terniario
 * operador ? true: false:
 */

 $a = 2;
 $b = 4;

$evaluar = ($a > $b)? $a * $b:$a / $b;

echo $evaluar;

