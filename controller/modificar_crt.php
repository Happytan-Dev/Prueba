<?php

if (!empty($_POST["btnModificar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {

        $id=$_POST["id_persona"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql=$conexion->query("UPDATE tb_persona SET nombre='$nombre', apellido='$apellido', dni='$dni', fecha_nacimiento='$fecha', correo='$correo' WHERE id_persona= $id ");

        if ($sql) {
            header("Location: index.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error al modificar datos</div>";
        }

    } else {
        echo "<div class='alert alert-warning'>hay un campo vacio</div>";
    }
}
