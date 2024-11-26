<?php
require('conexion.php');
$db = new Conexion;
$conexion = $db->getConexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_genero = $_POST['id_genero'];
$id_ciudad = $_POST['id_ciudad'];
$lenguajes = $_POST['lenguajes'];

$sql ="INSERT INTO USUARIOS (nombre_usuario, apellido_usuario, correo_usuario, fecha_nacimiento, genero, ciudad) VALUES
(:nombre, :apellido, :correo, :fecha_nacimiento, :genero, :ciudad)";




$stm =$conexion->prepare($sql);


$stm ->bindParam(":nombre",$nombre);
$stm ->bindParam(":apellido",$apellido);
$stm ->bindParam(":correo",$correo);
$stm ->bindParam(":fecha_nacimiento",$fecha_nacimiento);
$stm ->bindParam(":genero",$id_genero);
$stm ->bindParam(":ciudad",$id_ciudad);


// $usuario= $stm-> execute();

$id_usuario = $conexion-> lastInsertId();

// var_dump($id_usuario);

// recorer
foreach ($lenguajes as $key => $value) {
    $sqllenguaje ="INSERT INTO lenguaje_usuarios (id_usuario, id_lenguaje) VALUES
    (:id_usuario, :id_lenguaje)";
    $stmlen =$conexion->prepare($sqllenguaje);
    $stmlen ->bindParam(":id_lenguaje",$value);
    $stmlen ->bindParam(":id_usuario",$id_usuario);
    
    

}


