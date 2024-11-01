<?php

/**
 * Los alumnos de un curso se han divido en los grupos a y b , de acuerdo con el sexo y el nombre, el grupo a esta formador por las mujeres con nombre anterior a la M y los hombre con el nombre posterio a la N y el grupo b por el resto
 */

$nombre = "julian";
$sexo = "masculino";
$a = "Grupo a";

if ($nombre[0] < "m" && $sexo == "masculino" || $nombre[0] > "n" && $sexo == "femenino"){
  return "grupo a";
}
else {
  return "Grupo b";
}

