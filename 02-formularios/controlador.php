<?php

print_r($_REQUEST['checkbox']);


$nombre = "";
$apellido = "";
$edad = "";
$telefono = "";
$errores = [];

if (isset($_REQUEST['nombre'])&& empty($_REQUEST['nombre'])){
  array_push($errores, "El campo nombre es requerido");
}

if (isset($_REQUEST['apellido'])&& empty($_REQUEST['apellido'])){
  array_push($errores, "El campo appelido es requerido");
}

if (isset($_REQUEST['correo'])&& empty($_REQUEST['correo'])){
  array_push($errores, "El campo correo es requerido");
}

if (isset($_REQUEST['edad'])&& empty($_REQUEST['edad'])){
  array_push($errores, "El campo edad es requerido");
}

if (isset($_REQUEST['telefono'])&& empty($_REQUEST['telefono'])){
  array_push($errores, "El campo telefono es requerido");
}

// echo "<ul>";
// for ($i=0;$i < count($errores) ; $i++) { 
//   echo "<li>". $errores[$i]. "</li>";
// }
// echo "</ul>";

if ( count($_REQUEST['checkbox'])>=2){
  echo "nice";
}else{
  echo "no";
}