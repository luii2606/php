<?php
$texto = "B2Wn0t";
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
// $exp = "/([A-Z]{4,}).([0-50]{2,})/";
// $exp = "/[\W]/";
$exp = "/(?=.*([A-Z]){2})(?=.*([a-z]){2})(?=.*\d{2}))/";

$resultado = preg_match_all($exp, $texto, $coincidencias,PREG_OFFSET_CAPTURE);

echo "<pre>";
print_r($resultado);
echo "</pre>";
// echo "<br>";

if ($resultado) {
 echo "cumple";
} else {
  echo " no cumple";
}