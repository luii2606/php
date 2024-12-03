<?php

require('conexion.php');
$db = new Conexion;
$conexion = $db->getConexion();
// var_dump($conexion);


$sqla ="SELECT * FROM ciudades";
$bandera = $conexion->prepare($sqla);
$bandera->execute();
$ciudades =$bandera->fetchAll();

$sqlg ="SELECT * FROM generos";
$banderag = $conexion->prepare($sqlg);
$banderag->execute();
$generos =$banderag->fetchAll();

$sqll ="SELECT * FROM lenguajes";
$banderal = $conexion->prepare($sqll);
$banderal->execute();
$lenguajes =$banderal->fetchAll();


// print_r($lenguajes);

// die();

?>
<form action="controlador.php" method="post">
    <fieldset>
    <div>
        <div>
            <h1>Registro de Usuarios</h1>
        </div>
        <div>
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre">
        </div>
        <br>
<form action="controlador.php" method="post">
    <div>
        <div>
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido">
        </div>
        <br>
        <div>
            <label for="correo">Correo</label>
            <input type="text" name="correo">
        </div>
        <br>
        <div>
            <label for="nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento">
        </div>
        <br>
        <label for="id_ciudad">Ciudad</label >
        <select name="id_ciudad" id="id_ciudad">
        <?php
            foreach ($ciudades as $key => $value) {
                ?>
                <option value="<?= $value['id'] ?>">
                <?= $value["nombre"]?>
                </option>
            <?php }  ?>
        </select>
    </div>
    <br>
    <div>
        <?php
        foreach($generos as $key => $value){
        ?>
            <div>
            <label for="genero<?= $value['id'] ?>"><?= $value['nombre']?>
                <input type="radio" name="id_genero" value="<?= $value['id']?>" id="genero<?= $value['id']?>">
            </div>
            <?php
            }
            ?>
    </div> 
        <br>
        <div>
        <?php
            foreach($lenguajes as $key => $value){
        ?>
            <div>
                <label for="lenguaje_<?= $value['id'] ?>"><?= $value['nombre']?></label>
                    <input type="checkbox" name="lenguajes[]" value="<?= $value['id']?>" id="lenguaje_<?= $value['id']?>">
            </div>
                <?php
                    }
                    ?>

        </div>
        <br>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
</fieldset>