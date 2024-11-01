<?php
/**
 * 
 * Estructura
 * if(?){
 *  if(?){
 *    codigo a ejecutar;
 *  }else{
 *    codigo a ejecutar;
 *  }
 * }
 */
$a=2;
$b=5;
$c=10;


 if ($a > $b){
  if ($a > $c){
    echo $a;
  }
 }else if($b > $a){
  if ($b > $c){
    echo $b;
  }else{
    echo $c;
  }
 }

 echo "<br>";
 //Un programa que el numero que ingrese le imprima el numero de la semana

 $num = 5;

 if($num == 1){
  echo "Lunes";
 } else if($num==2){
    echo "Martes";
  }if ($num==3){
    echo "Miercoles";
  }if($num==4){
    echo "Jueves";
  }if($num==5){
    echo "Viernes";
  }if($num==6){
    echo "Sabado";
  }if($num==7){
    echo "Domingo";
  }else if ($num > 7 ){
    echo "numero equivocado";
  }if($num <= 0){
    echo "numero equivocado";
  }