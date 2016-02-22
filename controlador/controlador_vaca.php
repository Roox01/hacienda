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

if ($opcion == "cargar_crias") {
    cargar_crias();
}

if ($opcion == "registrar") {
    registrar();
}

function datos_generales() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $codigo_vaca = (int) $_POST['vaca'];

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
        $sentencia->bind_result($numero, $nombre, $registro, $fecha_nacimiento, $padre_numero, $padre_registro, $madre_numero, $madre_registro, $clasificacion, $peso_205dias, $altura_sacro_destete, $peso_18meses, $fecha_entrada_toro, $peso_entrada_toro, $foto);
        while ($sentencia->fetch()) {
            $datos = [$numero, $nombre, $registro, $fecha_nacimiento, $padre_numero, $padre_registro, $madre_numero, $madre_registro,
                $clasificacion, $peso_205dias, $altura_sacro_destete, $peso_18meses, $fecha_entrada_toro, $peso_entrada_toro, $foto];
            $mensaje.=json_encode($datos);
        }
    }
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function clasificacion_fenotipo() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $codigo_vaca = (int) $_POST['vaca'];

    $sql = "SELECT `car_racial_ap_general`, `esqueleto`, `aplomos`, `largo`, `amplitud_pecho`, `amplitud_lomo`,"
            . " `amplitud_anca`, `profundidad_torax`, `profundidad_calzon`, `desarrollo`, `temperamento`, `musculo_grasa`,"
            . " `ap_general`, `u_post`, `u_ant`, `pezon`, `irrig`, `total` FROM `fenotipo` WHERE `id_vaca`=? ;";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("i", $codigo_vaca)) {
        $mensaje.= $mysqli->error;
    }

    if ($sentencia->execute()) {
        $sentencia->bind_result($car_racial_ap_general, $esqueleto, $aplomos, $largo, $amplitud_pecho, $amplitud_lomo, $amplitud_anca, $profundidad_torax, $profundidad_calzon, $desarrollo, $temperamento, $musculo_grasa, $ap_general, $u_post, $u_ant, $pezon, $irrig, $total);
        while ($sentencia->fetch()) {
            $datos = [$car_racial_ap_general, $esqueleto, $aplomos, $largo, $amplitud_pecho, $amplitud_lomo, $amplitud_anca,
                $profundidad_torax, $profundidad_calzon, $desarrollo, $temperamento, $musculo_grasa, $ap_general, $u_post, $u_ant, $pezon, $irrig, $total];
            $mensaje.=json_encode($datos);
        }
    }
//    $mensaje='["juan","pedro","jacinto"]';
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function cargar_crias() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $codigo_vaca = (int) $_POST['vaca'];

    $sql = "SELECT `padre`, `fecha_parto`, `sexo`, `numero_cria`, `inter_parto`, `fecha_destete`, `peso_destete`,"
            . " `peso_205dias`, `indice1`, `peso_18meses`, `indice2`, `observaciones` FROM `cria` WHERE `id_vaca`=?";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("i", $codigo_vaca)) {
        $mensaje.= $mysqli->error;
    }

    if ($sentencia->execute()) {
        $sentencia->bind_result($padre, $fecha_parto, $sexo, $numero_cria, $inter_parto, $fecha_destete, $peso_destete, $peso_205dias, $indice1, $peso_18meses, $indice2, $observaciones);
        while ($sentencia->fetch()) {
            $datos = [$padre, $fecha_parto, $sexo, $numero_cria, $inter_parto, $fecha_destete, $peso_destete,
                $peso_205dias, $indice1, $peso_18meses, $indice2, $observaciones];
            $mensaje.=json_encode($datos);
        }
    }
//    $mensaje='["juan","pedro","jacinto"]';
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function registrar() {
    if (!$conexion = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $hacienda = 1;
    $numero = (int) $_POST['numero'];
    $nombre = $_POST['nombre'];
    $registro = (int) $_POST['registro'];
    $fecha_nacimiento = date('Y-m-d', strtotime($_POST['nacimiento']));
    $padre_numero = (int) $_POST['padre'];
    $padre_registro = (int) $_POST['reg_padre'];
    $madre_numero = (int) $_POST['madre'];
    $madre_registro = (int) $_POST['reg_madre'];
    $clasificacion = $_POST['clasificacion'];
    $peso_205dias = (int) $_POST['peso_205'];
    $altura_sacro_destete = (int) $_POST['alt_sacro'];
    $peso_18meses = (int) $_POST['peso_18'];
    $fecha_entrada_toro = date($_POST['fecha_toro']);
    $peso_entrada_toro = (int) $_POST['peso_toro'];
    $foto = "";
    $observaciones = "";


//    $sql = "INSERT INTO `vaca` (`hacienda`, `numero`, `nombre`, `registro`, `fecha_nacimiento`, `padre_numero`,"
//            . " `padre_registro`, `madre_numero`, `madre_registro`, `clasificacion`, `peso_205dias`, `altura_sacro_destete`,"
//            . " `peso_18meses`, `fecha_entrada_toro`, `peso_entrada_toro`, `foto`, `observaciones`) "
//            . "VALUES ('$hacienda', '$numero', '$nombre', '$registro', '$fecha_nacimiento', '$padre_numero', '$padre_registro',"
//            . " '$madre_numero', '$madre_registro', '$clasificacion', '$peso_205dias', '$altura_sacro_destete', '$peso_18meses', '$fecha_entrada_toro', '$peso_entrada_toro','', '')";
//    
//    if(mysqli_query($conexion, $sql)){
//        $mensaje.='Vaca registrado con éxito';
//    }else{
//        $mensaje.='Actualmente la vaca se encuentra registrada en la base de datos';
//    }    
//    echo $mensaje;
    


    $sql = "INSERT INTO `vaca` (`hacienda`, `numero`, `nombre`, `registro`, `fecha_nacimiento`, `padre_numero`,"
            . " `padre_registro`, `madre_numero`, `madre_registro`, `clasificacion`, `peso_205dias`, `altura_sacro_destete`,"
            . " `peso_18meses`, `fecha_entrada_toro`, `peso_entrada_toro`, `foto`, `observaciones`) "
            . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    if (!$sentencia = $conexion->prepare($sql)) {
        $mensaje.= $conexion->error;
    }
    if (!$sentencia->bind_param("iisisiiiisiiisiss", $hacienda, $numero, $nombre, $registro, $fecha_nacimiento, $padre_numero, $padre_registro, $madre_numero, $madre_registro, $clasificacion, $peso_205dias, $altura_sacro_destete, $peso_18meses, $fecha_entrada_toro, $peso_entrada_toro, $foto, $observaciones)) {
        $mensaje.= $conexion->error;
    }

    if ($sentencia->execute()) {
        $mensaje = "Vaca registrada con éxito";
    } else {
        $mensaje = "Error al registrar una nueva vaca".$sentencia->error;
    }

    $sentencia->close();
    $conexion->close();
    echo $mensaje;
}

function registrarCria() {
    if (!$conexion = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    
    $id_vaca= (int) $_POST['id_vaca'];
    $padre = (int) $_POST['numero'];    
    $fecha_parto = date('Y-m-d', strtotime($_POST['parto']));
    $sexo = (int) $_POST['padre'];
    $numero_cria = (int) $_POST['reg_padre'];
    $inter_parto = $_POST['madre'];
    $fecha_destete =  date('Y-m-d', strtotime($_POST['reg_madre']));
    $peso_destete =(int)$_POST['clasificacion'];
    $peso_205dias = (int) $_POST['peso_205'];
    $indice1 = $_POST['alt_sacro'];
    $peso_18meses = (int)$_POST['peso_18'];
    $indice2 = ($_POST['fecha_toro']);
    $observaciones = $_POST['observaciones'];



    $sql = "INSERT INTO `cria`(`id_vaca`, `padre`, `fecha_parto`, `sexo`, `numero_cria`, `inter_parto`, `fecha_destete`,"
            . " `peso_destete`, `peso_205dias`, `indice1`, `peso_18meses`, `indice2`, `observaciones`)"
            . " VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    if (!$sentencia = $conexion->prepare($sql)) {
        $mensaje.= $conexion->error;
    }
    if (!$sentencia->bind_param("iisiissiisiss", $hacienda, $numero, $nombre, $registro, $fecha_nacimiento, $padre_numero, $padre_registro, $madre_numero, $madre_registro, $clasificacion, $peso_205dias, $altura_sacro_destete, $peso_18meses, $fecha_entrada_toro, $peso_entrada_toro, $foto, $observaciones)) {
        $mensaje.= $conexion->error;
    }

    if ($sentencia->execute()) {
        $mensaje = "Vaca registrada con éxito";
    } else {
        $mensaje = "Error al registrar una nueva vaca".$sentencia->error;
    }

    $sentencia->close();
    $conexion->close();
    echo $mensaje;
}
?>

