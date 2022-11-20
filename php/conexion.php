<?php

$conexion = mysqli_connect('localhost', 'root', 'chuc1234','clientes');
    if (!$conexion) {
        echo('error en la conexion');
        exit;
    }

?>