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

?>
<form action="controlador.php" method="post">
    <div>
        <div>
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido">
        </div>
        <div>
            <label for="correo">Correo</label>
            <input type="text" name="correo">
        </div>
        <div>
            <label for="nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento">
        </div>
        <label for="id_ciudad">Ciudad</label >
        <select name="id_ciudad" id="id_ciudad">
            <?php
            foreach ($ciudades as $key => $value) {
                ?>
                <option name="id_ciudad" value="<?= $value['id_ciudad']?>"><?= $value['ciudad']?>
                </option>
            <?php
            }
            ?>
        </select>
    </div>
    <div>
        <?php
        foreach($generos as $key => $value){
        ?>
            <div>
            <label for="genero<?= $value['id_genero'] ?>"><?= $value['genero']?>
                <input type="radio" name="id_genero" value="<?= $value['id_genero']?>" id="genero<?= $value['id_genero']?>">
            </label>
            </div>
            <?php
            }
            ?>
    </div> 
        <div>
        <?php
            foreach($lenguajes as $key => $value){
        ?>
            <div>
                <label for="lenguajes<?= $value['id_lenguaje'] ?>"><?= $value['nombre_lenguaje']?>
                    <input type="checkbox" name="lenguajes[]" value="<?= $value['id_lenguaje']?>" id="lenguaje<?= $value['id_lenguaje']?>">
                </label>
            </div>
                <?php
                    }
                    ?>

        </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>

