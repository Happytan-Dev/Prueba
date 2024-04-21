<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y sql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b947a47eaa.js" crossorigin="anonymous"></script>
</head>
<script>
    function eliminar() {
        var respuesta=confirm("estas seguro que deseas eliminar?");
        return respuesta;
    }
</script>
<body>
    <h1 class="text-center p-3">  hola mundo</h1>
    <?php
    require_once "model/conexion.php";
    require_once "controller/eliminar_personas_crt.php";
    ?>
    <div class="conteiner fluid row">
        <form class="col-4 p-4" method="POST">
                <h3 class="text-center text-secondary">Registro de personas</h3>

                <?php
                require_once "controller/registrar_personas_crt.php";
                ?>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nombre</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="nombre" placeholder="Ingrese su nombre">    
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Apellido</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="apellido" placeholder="Ingrese su apellido" >    
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Dni</label>
                    <input type="text" id="disabledTextInput" class="form-control" name="dni" placeholder="Ingrese su numero de identificacion">    
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Fecha de nacimiento</label>
                    <input type="date" id="disabledTextInput" class="form-control" name="fecha" placeholder="Ingrese su fecha de nacimiento">    
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Correo</label>
                    <input type="email" id="disabledTextInput" class="form-control" name="correo" placeholder="Ingrese su suario">    
                </div>

                <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">correo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "model/conexion.php";
                    $sql = $conexion->query("SELECT * FROM tb_persona");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?php echo $datos->id_persona ?></td>
                            <td><?php echo $datos->nombre ?></td>
                            <td><?php echo $datos->apellido ?></td>
                            <td><?php echo $datos->dni ?></td>
                            <td><?php echo $datos->fecha_nacimiento ?></td>
                            <td><?php echo $datos->correo ?></td>                            
                            <td>
                                <a href="modificar.php?id_persona=<?= $datos->id_persona?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a onclick="return eliminar ()" href="index.php?id_persona=<?= $datos->id_persona ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php } ?>

                    
                </tbody>
            </table>
        </div>
    </div>

    <!--javascript bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>        
</body>
</html>