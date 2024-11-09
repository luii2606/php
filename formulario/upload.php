<?php

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
// var_dump($_FILES);

  // $errores= array();
  // $temporal = $_FILES('archivo')['temp_name'];
  // $nombre_archivo = $_FILES ['archivo']['name'];
  // $tamanio_archivo = $_FILES ['archivo']['size'];
  // $type_archivo = $_FILES ['archivo']['type'];
  // $error_archivo = $_FILES ['archivo']['error'];


if (isset($_FILES["archivo"])) {
  $errores= array();
  $temporal = $_FILES['archivo']['tmp_name'];
  $nombre_archivo = $_FILES ['archivo']['name'];
  $tamaño_archivo = $_FILES ['archivo']['size'];
  $type_archivo = $_FILES ['archivo']['type'];
  $error_archivo = $_FILES ['archivo']['error'];

  $bandera = explode('.', $nombre_archivo); //dividir una array
  $archivo_extencion = strtolower(end($bandera)); 
  $extenciones = array('jpeg', 'jpg', 'png');
  // echo $tamanio_archivo;

  // var_dump (in_array($archivo_extencion, $extenciones));


  if (in_array($archivo_extencion, $extenciones)===false){
    $errores[] = "Extencion no pemitida";
    // print_r($errores);
  }

   if ($tamaño_archivo > 2097152){
    $errores[] = "el tamaño máximo permitido es de 2MB";
  }

  if (empty ($errores) ) {
   move_uploaded_file($temporal, "imagenes/".rand(0.9). $nombre_archivo);
  }

  
}else {
  echo "no envió archivo";
}


