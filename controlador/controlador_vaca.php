<?php
require_once 'conexionMySqli.php';
require_once '../modelo/vaca.php';

$opcion = $_POST['opcion'];

if ($opcion == "datos_generales") {
    datos_generales();
}

if ($opcion == "clasificacion_fenotipo") {
    clasificacion_fenotipo();
}

function datos_generales(){
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $codigo_vaca = (int)$_POST['vaca'];

    $sql = "SELECT `numero`, `nombre`, `registro`, `fecha_nacimiento`, `padre_numero`, `padre_registro`,"
            . " `madre_numero`, `madre_registro`, `clasificacion`, `peso_205dias`, `altura_sacro_destete`,"
            . " `peso_18meses`, `fecha_entrada_toro`, `peso_entrada_toro`, `foto` FROM `vaca` WHERE `numero`=?;";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("i", $codigo_vaca)) {
        $mensaje.= $mysqli->error;
    }
    if ($sentencia->execute()) {
        $sentencia->bind_result($numero, $nombre, $registro, $fecha_nacimiento, $padre_numero, $padre_registro, $madre_numero, 
                $madre_registro, $clasificacion, $peso_205dias, $altura_sacro_destete, $peso_18meses, $fecha_entrada_toro, $peso_entrada_toro, $foto);
        while ($sentencia->fetch()) {
            $datos=[$numero, $nombre, $registro, $fecha_nacimiento, $padre_numero, $padre_registro, $madre_numero, $madre_registro,
                $clasificacion, $peso_205dias, $altura_sacro_destete, $peso_18meses, $fecha_entrada_toro, $peso_entrada_toro, $foto];
            $mensaje.=json_encode($datos);
        }
    }
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function clasificacion_fenotipo(){
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $codigo_vaca = (int)$_POST['vaca'];

    $sql = "SELECT `car_racial_ap_general`, `esqueleto`, `aplomos`, `largo`, `amplitud_pecho`, `amplitud_lomo`,"
            . " `amplitud_anca`, `profundidad_torax`, `profundidad_calzon`, `desarrollo`, `temperamento`, `musculo_grasa`,"
            . " `ap_general`, `u_post`, `u_ant`, `pezon`, `irrig`, `total` FROM `fenotipo` WHERE id_vaca=? ";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("i", $codigo_vaca)) {
        $mensaje.= $mysqli->error;
    }
    if ($sentencia->execute()) {
        $sentencia->bind_result($car_racial_ap_general, $esqueleto, $aplomos, $largo, $amplitud_pecho, $amplitud_lomo, $amplitud_anca, 
                $profundidad_torax, $profundidad_calzon, $desarrollo, $temperamento, $musculo_grasa, $ap_general, $u_post, $u_ant, $pezon, $irrig, $total);
        while ($sentencia->fetch()) {
            $datos=[$car_racial_ap_general, $esqueleto, $aplomos, $largo, $amplitud_pecho, $amplitud_lomo, $amplitud_anca, 
                $profundidad_torax, $profundidad_calzon, $desarrollo, $temperamento, $musculo_grasa, $ap_general, $u_post, $u_ant, $pezon, $irrig, $total];
            $mensaje.=json_encode($datos);
        }
    }
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}



?>

