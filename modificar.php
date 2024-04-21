<?php
require_once "model/conexion.php";

$id_persona = $_GET['id_persona'];
$sql= $conexion->query(" SELECT * FROM tb_persona WHERE id_persona= $id_persona" );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<form class="col-4 p-4 m-auto" method="POST">
                <h3 class="text-center text-secondary"> Actualizar datos</h3>
                <input type="hidden" id="id_persona" name="id_persona" value="<?php echo $id_persona;?>">
                <?php
                require_once "controller/modificar_crt.php";
                while($datos=$sql->fetch_object()){ ?>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nombre</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="nombre" placeholder="Ingrese su nombre" value="<?php echo $datos->nombre ?>">    
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Apellido</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="apellido" placeholder="Ingrese su apellido" value="<?php echo $datos->apellido ?>">    
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Dni</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="dni" placeholder="Ingrese su numero de identificacion" value="<?php echo $datos->dni ?>">    
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Fecha de nacimiento</label>
                        <input type="date" id="disabledTextInput" class="form-control" name="fecha" placeholder="Ingrese su fecha de nacimiento" value="<?php echo $datos->fecha_nacimiento ?>">    
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Correo</label>
                        <input type="email" id="disabledTextInput" class="form-control" name="correo" placeholder="Ingrese su suario" value="<?php echo $datos->correo ?>">    
                    </div>
                <?php } ?>

                <button type="submit" class="btn btn-primary" name="btnModificar" value="ok">Actualizar</button>
        </form>
</body>
</html>