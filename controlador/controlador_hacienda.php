<?php

require_once 'conexionMySqli.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$opcion = $_POST['opcion'];
if ($opcion == "haciendas") {
    cargar_hacienda();
}

function cargar_hacienda() {


    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";

    $sql = "SELECT `id`, `nombre` FROM `hacienda` ";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }

    if ($sentencia->execute()) {
        $sentencia->bind_result($id, $nombre);
        while ($sentencia->fetch()) {
            $datos = [$id, $nombre];
            $mensaje.='<option value="' . $nombre . '">' . $nombre . '</option>';
        }
    }
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}
