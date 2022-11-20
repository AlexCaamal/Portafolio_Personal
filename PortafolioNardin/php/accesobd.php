<?php
    include_once("conexion.php");

    insertar($conexion);

    function insertar($conexion){
        $nombres = $_POST['nombres'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];


        $agregar = "INSERT INTO tb_cliente (nombres, celular, email, mensaje)
        VALUES ('$nombres', '$celular','$email','$mensaje')";

        mysqli_query($conexion, $agregar);
        mysqli_close($conexion);
        header("Location: ../contacto.html");
    }
?>