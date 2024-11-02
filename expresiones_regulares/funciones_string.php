<?php
$texto = "HOLA 22 ";
// $exp = "/PRUEBA/i";
// $exp = "/[0-9]/";
// $exp = "/^texto/i";
// $exp = "/pr[ue]eba/i";
// $exp = "/grupo-[0-9]-adso/";
// $exp = "/l[aeiou]{2,4}r/";
// $exp = "/[0-9]";
// $exp = "/[A-Za-z]/";
// $exp = "/[\d]/ numeros";
// $exp = "/[\D]/ letras";
// $exp = "/[A-Z]{4,}/";
$exp = "/([A-Z]{4,}).([0-50]{2,})/";
$exp = "/[\W]/";
$resultado = preg_match_all($exp, $texto, $coincidencias,
PREG_OFFSET_CAPTURE);

// echo "<pre>";
// print_r($coincidencias);
// echo "</pre>";
// echo "<br>";

if ($resultado) {
 echo "caracter especial encontrado";
} else {
  echo " ningun caracter especial encontrado";
}