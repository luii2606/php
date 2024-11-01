<?php

$palabra = "lUisA";

$vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');

// for ($i=0; $i < strlen($palabra); $i++) { 
//   for ($j= 0; count($vocales); $j++){
//     if $vocales
//   }
// }

function vocales($palabra, $vocales){
  $solo_consonantes = str_replace($vocales, "",$palabra);
  return $solo_consonantes;
}

echo vocales($palabra, $vocales);