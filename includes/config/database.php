<?php

function conectarBD() : mysqli{
    $db = mysqli_connect('localhost', 'root', 'Webilo0101', 'bienesraices_crud');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}