<?php

$a = 2;
$b = 0;
$operaciones = [];

function calculadora($a, $b){
  try {
    if ($b === 0){
      throw new Exception("division por cero");
    }
    $operaciones = array(
    "sumar" => $a + $b,
    "resta" => $a - $b,
    "divi" => $a / $b,
    "multi" => $a * $b

    );
  return $operaciones;
  }
  catch (Exception $e) {
    echo $e -> getMessage();
  }
};

$operaciones = calculadora($a, $b);

echo "<pre>";
print_r($operaciones);
echo "</pre>";





