<?php

require('conexion.php');
$db = new Conexion;
$conexion = $db->getConexion();

$sqlu ="SELECT * FROM usuarios";
$banderau = $conexion->prepare($sqlu);
$banderau->execute();
$usuarios =$banderau->fetchAll();
?>

<table border= 'solid 1px'>
    <tr>
        <td>id</td>
        <td>Nombre_usuario</td>
        <td>Apellido_usuario</td>
        <td>Correo_usuario</td>
        <td>Fecha_nacimiento</td>
        <td>Genero</td>
        <td>Ciudad</td>

    </tr>
    <?php
    foreach ($usuarios as $key => $value)
    {
        ?>
        <tr>
            <td><?=$value ["id"]?></td>
            <td><?=$value ["nombre"]?></td>
            <td><?=$value ["apellido"]?></td>
            <td><?=$value ["correo"]?></td>
            <td><?=$value ["fecha_nacimiento"]?></td>
            <td><?=$value ["genero_id"]?></td>
            <td><?=$value ["ciudad_id"]?></td>
            <td><a href="actualizar.php">ACTUALIZAR</a></td>
        </tr>
    <?php
    }
    ?>

</table>
<a href="index.php">registro</a>