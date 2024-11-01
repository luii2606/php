<?php

/**
 * Estructura condicional simple
 * 
 * if(exprecion){
 *  Codigo a ejecutar
 * }
 * 
 * if (exprecion):
 *  Codigo a ejecutar
 * endif;
 *
 */

 $edad = 18;
 $saludo = "Hola persona";
 

 if ($edad >= 18){
  echo "Hola";
 }
 echo "<br>";
?>

<!-- <div>
  <?php if ($edad >= 18):?>
          <h1>
            <?= $saludo ?>
          </h1>
          <?php endif;?>
</div> -->

<!-- <div>
  <?php if ($edad >= 18):?>
          <h1>Saludo persona</h1>
          <?php endif;?>
</div> -->

<?php
//Realize un programa donde se pida un numero y si es par debe aparecer un mensaje que es par
$numero = 2;
//En un almacen se hace un 20% de desc de clientes cuya compra supere los 100 dolares, cual sera la cantidad que pagara una persona por su compra?
$compra = 200;
?>

<div>
  <?php
  if ($numero %2 == 0 ){
    echo "par";
  }
  
 echo "<br>";
  
if ($compra > 100 ){
    $descuento = $compra * 0.20;
    $total = $compra - $descuento;
    echo "El valor del descuento es de: ". $total;
  }
?>
</div>

