<?php

$texto = 'Fundamentos de programacion en PHP';

$asignacion = $texto;

$referencia =&$texto;

echo $asignacion;
echo "<br>";
echo $referencia;
$texto = "asignacion por referencia";
echo "<br>";
echo $referencia;
