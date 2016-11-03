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
if ($opcion == "historial_fecha") {
    historial_fecha();
}
if ($opcion == "registrar_hacienda") {
    registrar_hacienda();
}
if ($opcion == "registrar_usuario") {
    registrar_usuario();
}
if ($opcion == "traslado") {
    traslado_vaca();
}

function cargar_hacienda() {


    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";

    $sql = "SELECT `id`, `nombre` FROM `hacienda` ORDER BY `nombre`";

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
        $mensaje = '<table id="inventario_hacienda" class="table table-hover">
                    <thead>
                        <tr>
                            <th >Número</th>
                            <th >Nombre</th>            
                            <th >Estado</th>
                            <th >Observaciones</th>
                            <th >Fecha de consulta</th>
                        </tr>  
                    </thead>
                    <tbody>';
        while ($sentencia->fetch()) {
            $mensaje.='<tr">
                <td >' . $id_vaca . '</td>
                <td >' . $nombre . '</td>
                <td >' . $estado . '</td>
                <td >' . $observaciones . '</td>
                <td >' . $fecha_consulta . '</td>
                </tr>';
        }
        $mensaje.='</tbody></table>';
    } else {
        $mensaje.='<tr colspan="13">LA VACA NO TIENE CRÍAS</tr>';
    }
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
    $vaca = $_POST['vaca'];

    $sql = "SELECT c.id_vaca, v.nombre, c.estado, c.observaciones, c.fecha FROM cambios c, vaca v, hacienda h "
            . "WHERE h.nombre='$hacienda' AND h.id=v.hacienda AND v.numero=c.id_vaca AND c.id_vaca COLLATE latin1_swedish_ci LIKE '%$vaca%'";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje = $mysqli->error;
    }

    if ($sentencia->execute()) {
        $sentencia->bind_result($id_vaca, $nombre, $estado, $observaciones, $fecha_consulta);
        $mensaje = '<table id="historial" class="table table-hover table-responsive" >
                    <thead>
                        <tr>                
                            <th >Número</th>
                            <th >Nombre</th>            
                            <th >Estado</th>
                            <th >Observaciones</th>
                            <th >Fecha de consulta</th>
                        </tr>
                    </thead>
                    <tbody>';
        while ($sentencia->fetch()) {
            $mensaje.='<tr >
                <td >' . $id_vaca . '</td>
                <td >' . $nombre . '</td>
                <td >' . $estado . '</td>
                <td >' . $observaciones . '</td>
                <td >' . $fecha_consulta . '</td>
                </tr>';
        }
        $mensaje.='</tbody></table>';
    } else {
        $mensaje = '<tr colspan="13">LA VACA NO TIENE CRÍAS</tr>';
    }
//    $mensaje='["juan","pedro","jacinto"]';
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function historial_fecha() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $hacienda = $_POST['hacienda'];
    $fecha = $_POST['fecha'];

    $sql = "SELECT i.id_vaca, v.nombre, i.estado,i.observaciones,i.fecha_consulta FROM inventario i, vaca v, hacienda h "
            . "WHERE h.nombre=? AND h.id=v.hacienda AND v.numero=i.id_vaca AND i.fecha_consulta >=?";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("ss", $hacienda, $fecha)) {
        $mensaje.= $mysqli->error;
    }

    if ($sentencia->execute()) {
        $sentencia->bind_result($id_vaca, $nombre, $estado, $observaciones, $fecha_consulta);
        $mensaje = '<table id="historial" class="table table-hover" >
                    <thead>
                        <tr>                
                            <th >Número</th>
                            <th >Nombre</th>            
                            <th >Estado</th>
                            <th >Observaciones</th>
                            <th >Fecha de consulta</th>
                        </tr>
                    </thead>
                    <tbody>';
        while ($sentencia->fetch()) {
            $mensaje.='<tr >
                <td >' . $id_vaca . '</td>
                <td >' . $nombre . '</td>
                <td >' . $estado . '</td>
                <td >' . $observaciones . '</td>
                <td >' . $fecha_consulta . '</td>
                </tr>';
        }
        $mensaje.='</tbody></table>';
    } else {
        $mensaje.='<tr colspan="13">LA VACA NO TIENE CRÍAS</tr>';
    }
//    $mensaje='["juan","pedro","jacinto"]';
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function registrar_hacienda() {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $persona = $_POST['persona'];
    if (!$conexion = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $sql = "INSERT INTO `hacienda`(`id`, `nombre`, `direccion`, `telefono`, `persona`) VALUES ('',?,?,?,?)";
    if (!$sentencia = $conexion->prepare($sql)) {
        $mensaje.= $conexion->error;
    }
    if (!$sentencia->bind_param("ssss", $nombre, $direccion, $telefono, $persona)) {
        $mensaje.= $conexion->error;
    }

    if ($sentencia->execute()) {
        $mensaje.= "Hacienda registrada con éxito";
    } else {
        $mensaje = "Error al registrar una nueva hacienda. La hacienda se encuentra creada en la base de datos";
    }

    $sentencia->close();
    $conexion->close();
    echo $mensaje;
}

function registrar_usuario() {
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $hacienda = $_POST['hacienda'];
    if (!$conexion = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $sql = "INSERT INTO `usuario`(`id`, `nombre_usuario`, `password`, `hacienda`) VALUES ('',?,?,?)";
    if (!$sentencia = $conexion->prepare($sql)) {
        $mensaje.= $conexion->error;
    }
    if (!$sentencia->bind_param("ssi", $nombre, $password, $hacienda)) {
        $mensaje.= $conexion->error;
    }

    if ($sentencia->execute()) {
        $mensaje.= "Usuario registrado con éxito";
    } else {
        $mensaje = "Error al registrar un nuevo usuario. ya se encuentra creado en la base de datos";
    }

    $sentencia->close();
    $conexion->close();
    echo $mensaje;
}

function traslado_vaca() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }

    $mensaje = "";
    $vaca = $_POST['vaca'];
    $hacienda = $_POST['hacienda'];
    $id = (int) consultaIdHacienda($mysqli, $hacienda);


    $sql = 'UPDATE `vaca` SET `hacienda`=? WHERE `vaca`.numero=?;';
    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param('is', $id, $vaca)) {
        $mensaje.= $mysqli->error;
    }
    if ($sentencia->execute()) {
        $mensaje = "Traslado de hacienda exitoso";
    } else {
        $mensaje = "Error para realizar un traslado";
    }

    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function consultaIdHacienda($mysqli, $hacienda) {
    $mensaje = '';
    $sql = 'SELECT `id` FROM `hacienda` h WHERE h.nombre=?';
    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje = $mysqli->error;
    }
    if (!$sentencia->bind_param('s', $hacienda)) {
        $mensaje = $mysqli->error;
    }
    if ($sentencia->execute()) {
        $sentencia->bind_result($id);
        while ($sentencia->fetch()) {
            $mensaje = $id;
        }
    }
    $sentencia->close();
    return $mensaje;
}
