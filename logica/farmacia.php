<?php

/**
 * En una farmacia aplica al precio de los remedios el 10% del descuento, hacer un programa que al hacer los costos de los medicamentos calcule el valor del descuento
 */

 $articulo = 2000;
 $descuento = 0.10;
 $cant_articulos = 3;

function descuento($articulo, $descuento, $cant_articulos){
  $cantidad = $articulo * $cant_articulos;
  $a = $cantidad * $descuento;
  $des = $cantidad - $a;
  return $des;
}

echo descuento($articulo, $descuento, $cant_articulos);






