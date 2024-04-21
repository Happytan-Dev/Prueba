<?php
/*require_once "model/conexion.php";

if (!empty($_GET['$id_persona'])) {
    $id=$_GET['id_persona'];
    $sql=$conexion->query("DELETE FROM  tb_persona WHERE id_persona=$id");
    if ($sql==1) {
        echo '<div>Persona eliminada correctamente</div>';
    } else {
        echo '<div>Error al eliminar </div>';

    }
}*/

require_once "model/conexion.php";

if (!empty($_GET['id_persona'])) {
    $id = $_GET['id_persona'];

    $sql = $conexion->query("DELETE FROM tb_persona WHERE id_persona = $id");

    if ($sql) {
        echo '<div>Persona eliminada correctamente</div>';
        header("Location: index.php");
        exit();
    } else {
        echo '<div>Error al eliminar</div>';
    }

} 

