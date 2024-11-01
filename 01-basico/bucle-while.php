<?php

$a = 2;
$num = 5;

// $b = 5;

// while ($a <= 10){
//   echo "$a <b>";
//   $a++;
// }

// while ($a <= 10){
//    if ($a == 8){
//     $a++;
//     continue;
//    }
//    $multi = $b * $a;
//    echo "<br>";
//    echo "5 * $a = $multi";
   
//    $a++;
// }

// while ($a < $num/2){
//   $a++;
//   if ($num % $a == 0){
//     return true;
//   }
//   if ($a == 8){
//   continue;
//   }
//   echo "$num x $a = ". $num * $a. "<br>";
// }


// $numero = 11;

function esPrimo($numero){
  $a = 2;
  $primo = true;
  while ($a < $numero/2 && $primo) {
    if ($numero % $a == 0) {
      $primo = false;
      break;
    }
  }
  return $primo;
}

// $primo = esPrimo(12) ? "si": "no";

// echo $primo;

