<?php
    if (!empty($_POST["btnRegistrar"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"]) ) {
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $dni=$_POST["dni"];
            $fecha=$_POST["fecha"];
            $correo=$_POST["correo"];

            $sql= $conexion->query(" INSERT INTO tb_persona(nombre,apellido,dni,fecha_nacimiento,correo) values('$nombre','$apellido','$dni','$fecha','$correo')");
            
            /*$sql = $conexion->prepare("INSERT INTO tb_persona(nombre, apellido, dni, fecha_nacimiento, correo) VALUES (?, ?, ?, ?, ?)");
            $sql->bind_param("sssss", $nombre, $apellido, $dni, $fecha, $correo);
            $sql->execute();*/

            if ($sql==1) {
                echo "<div class='alert alert-success'> Persona registrada correctamente </div>";
                header("location:index.php");
                exit();
            } else {
                echo '<div class="alert alert-danger"> el registro a fallado  </div>';
            }
            

        } else {
            echo '<div class="alert alert-warning"> alguno de los campos esta vacio </div>';
        }
    }