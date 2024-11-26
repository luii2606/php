<?php
require('conexion.php');
$db = new Conexion;
$conexion = $db->getConexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_genero = $_POST['genero_id'];
$id_ciudad = $_POST['ciudad_id'];
$lenguajes = $_POST['lenguajes'];

$sql ="INSERT INTO USUARIOS (nombre, apellido, correo, fecha_nacimiento, genero_id, ciudad_id) VALUES
(:nombre, :apellido, :correo, :fecha_nacimiento, :genero, :ciudad)";




$stm =$conexion->prepare($sql);


$stm ->bindParam(":nombre",$nombre);
$stm ->bindParam(":apellido",$apellido);
$stm ->bindParam(":correo",$correo);
$stm ->bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm ->bindParam(":genero",$id_genero);
$stm ->bindParam(":ciudad",$id_ciudad);


$usuario= $stm-> execute();

$id_usuario = $conexion-> lastInsertId();

// var_dump($id_usuario);

// recorer
foreach ($lenguajes as $key => $value) {
    $sqllenguaje ="INSERT INTO lenguaje_usuario (usuario_id, lenguaje_id) VALUES(:usuario_id, :lenguaje_id)";
    $stmlen =$conexion->prepare($sqllenguaje);
    $stmlen ->bindParam(":lenguaje_id",$value);
    $stmlen ->bindParam(":usuario_id",$id_usuario);
    
    $stmlen-> execute();

}
