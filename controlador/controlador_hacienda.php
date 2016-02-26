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
if ($opcion == "cargar_inventario") {
    cargar_inventario();
}
if ($opcion == "cargar_historial") {
    cargar_historial();
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

function cargar_inventario() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $hacienda = $_POST['hacienda'];

    $sql = "SELECT i.id_vaca, v.nombre, i.estado, i.observaciones, i.fecha_consulta FROM inventario i, vaca v, hacienda h "
            . "WHERE h.nombre=? AND h.id=v.hacienda AND v.numero=i.id_vaca";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("s", $hacienda)) {
        $mensaje.= $mysqli->error;
    }

    if ($sentencia->execute()) {
        $sentencia->bind_result($id_vaca, $nombre, $estado, $observaciones, $fecha_consulta);
        while ($sentencia->fetch()) {
            $mensaje.='<tr">
                <td >' . $id_vaca . '</td>
                <td >' . $nombre . '</td>
                <td >' . $estado . '</td>
                <td >' . $observaciones . '</td>
                <td >' . $fecha_consulta . '</td>
                </tr>';
        }
    } else {
        $mensaje.='<tr colspan="13">LA VACA NO TIENE CRÍAS</tr>';
    }
//    $mensaje='["juan","pedro","jacinto"]';
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
    
}

function cargar_historial() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $hacienda = $_POST['hacienda'];

    $sql = "SELECT c.id_vaca, v.nombre, c.estado, c.observaciones, c.fecha FROM cambios c, vaca v, hacienda h "
            . "WHERE h.nombre=? AND h.id=v.hacienda AND v.numero=c.id_vaca";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("s", $hacienda)) {
        $mensaje.= $mysqli->error;
    }

    if ($sentencia->execute()) {
        $sentencia->bind_result($id_vaca, $nombre, $estado, $observaciones, $fecha_consulta);
        while ($sentencia->fetch()) {
            $mensaje.='<tr >
                <td >' . $id_vaca . '</td>
                <td >' . $nombre . '</td>
                <td >' . $estado . '</td>
                <td >' . $observaciones . '</td>
                <td >' . $fecha_consulta . '</td>
                </tr>';
        }
    } else {
        $mensaje.='<tr colspan="13">LA VACA NO TIENE CRÍAS</tr>';
    }
//    $mensaje='["juan","pedro","jacinto"]';
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
    
}