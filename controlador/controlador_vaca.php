<?php

session_start();
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

if ($opcion == "registrar_cria") {
    registrarCria();
}

if ($opcion == "editar_cria") {
    editarCria();
}

if ($opcion == "editar_fenotipo") {
    editarFenotipo();
}

if ($opcion == "editar_vaca") {
    editarVaca();
}

if ($opcion == "cargar_reproduccion") {
    cargarReproduccion();
}

if ($opcion == "editar_reproduccion") {
    editarReproduccion();
}

if ($opcion == "registrar_reproduccion") {
    registrarReproduccion();
}

if ($opcion == "actualizar_inventario") {
    actualizarInventario();
}

function datos_generales() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $codigo_vaca = (int) $_POST['vaca'];
    $hacienda = $_SESSION['hacienda'];


    $sql = "SELECT `numero`, v.`nombre`, `registro`, `fecha_nacimiento`, `padre_numero`, `padre_registro`, `madre_numero`, `madre_registro`,"
            . " `clasificacion`, `peso_205dias`, `altura_sacro_destete`, `peso_18meses`, `fecha_entrada_toro`, `peso_entrada_toro`, `foto`"
            . " FROM `vaca` v, `hacienda` h WHERE v.numero=? and h.id=v.hacienda and h.nombre=?;";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("is", $codigo_vaca, $hacienda)) {
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
    $hacienda = $_SESSION['hacienda'];

    $sql = "SELECT `car_racial_ap_general`, `esqueleto`, `aplomos`, `largo`, `amplitud_pecho`, `amplitud_lomo`, `amplitud_anca`,"
            . " `profundidad_torax`, `profundidad_calzon`, `desarrollo`, `temperamento`, `musculo_grasa`, `ap_general`, `u_post`,"
            . " `u_ant`, `pezon`, `irrig`, `total` FROM `fenotipo` f, `hacienda` h, `vaca` v "
            . "WHERE f.id_vaca=? and f.id_vaca=v.numero and v.hacienda=h.id and h.nombre=?;";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("is", $codigo_vaca, $hacienda)) {
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
    $hacienda = $_SESSION['hacienda'];

    $sql = "SELECT c.`padre`, `fecha_parto`, `sexo`, `numero_cria`, `inter_parto`, `peso_nacimiento`, `fecha_destete`,"
            . " `peso_destete`, c.`peso_205dias`, `indice1`, c.`peso_18meses`, `indice2`, c.`observaciones` "
            . "FROM `cria` c, `hacienda` h, `vaca` v WHERE c.id_vaca=? and c.id_vaca=v.numero and v.hacienda=h.id and h.nombre=?;";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("is", $codigo_vaca, $hacienda)) {
        $mensaje.= $mysqli->error;
    }

    if ($sentencia->execute()) {
        $sentencia->bind_result($padre, $fecha_parto, $sexo, $numero_cria, $inter_parto, $peso_nacimiento, $fecha_destete, $peso_destete, $peso_205dias, $indice1, $peso_18meses, $indice2, $observaciones);
        while ($sentencia->fetch()) {
            $mensaje.='<tr>
                <td><input type="text" id="numero_cria' . $numero_cria . '" value="' . $numero_cria . '" disabled></td>
                <td><input type="text" id="padre' . $numero_cria . '" value="' . $padre . '" disabled ></td>
                <td><input type="text" id="fecha_parto' . $numero_cria . '" value="' . $fecha_parto . '" disabled></td>
                <td><input type="text" id="sexo' . $numero_cria . '" value="' . $sexo . '" disabled></td>                
                <td><input type="text" id="inter_parto' . $numero_cria . '" value="' . $inter_parto . '" disabled></td>
                <td><input type="text" id="peso_nacimiento' . $numero_cria . '" value="' . $peso_nacimiento . '" disabled></td>
                <td><input type="date" id="fecha_destete' . $numero_cria . '" value="' . $fecha_destete . '" onblur="editar_cria(&fecha_destete&,&' . $numero_cria . '&);"></td>
                <td><input type="number" maxlength="5" id="peso_destete' . $numero_cria . '" value="' . $peso_destete . '"onblur="editar_cria(&peso_destete&,&' . $numero_cria . '&);"></td>
                <td><input type="number" maxlength="5" id="peso_205dias' . $numero_cria . '" value="' . $peso_205dias . '"onblur="editar_cria(&peso_205dias&,&' . $numero_cria . '&);"></td>
                <td><input type="text" maxlength="30" id="indice1' . $numero_cria . '" value="' . $indice1 . '"onblur="editar_cria(&indice1&,&' . $numero_cria . '&);"></td>
                <td><input type="number" maxlength="5" id="peso_18meses' . $numero_cria . '" value="' . $peso_18meses . '"onblur="editar_cria(&peso_18meses&,&' . $numero_cria . '&);"></td>
                <td><input type="text" maxlength="30" id="indice2' . $numero_cria . '" value="' . $indice2 . '"onblur="editar_cria(&indice2&,&' . $numero_cria . '&);"></td>
                <td><input type="text" maxlength="50" id="observaciones' . $numero_cria . '" value="' . $observaciones . '"onblur="editar_cria(&observaciones&,&' . $numero_cria . '&);"></td>                
            </tr>';
        }
    } else {
        $mensaje.='<tr colspan="13">LA VACA NO TIENE CRÍAS</tr>';
    }
//    $mensaje='["juan","pedro","jacinto"]';
    $sentencia->close();
    $mysqli->close();
    $mensaje = str_replace('&', "'", $mensaje);
    echo $mensaje;
}

function registrar() {
    if (!$conexion = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $hacienda = $_SESSION['hacienda'];
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



    $sql = "INSERT INTO `vaca`(`hacienda`, `numero`, `nombre`, `registro`, `fecha_nacimiento`, `padre_numero`, `padre_registro`, `madre_numero`, "
            . "`madre_registro`, `clasificacion`, `peso_205dias`, `altura_sacro_destete`, `peso_18meses`, `fecha_entrada_toro`, "
            . "`peso_entrada_toro`, `foto`) "
            . "SELECT h.`id`,?,?,?,?,?,?,?,?,?,?,?,?,?,?,? FROM `hacienda` h WHERE h.`nombre`=?;";
    if (!$sentencia = $conexion->prepare($sql)) {
        $mensaje.= $conexion->error;
    }
    if (!$sentencia->bind_param("isisiiiisiiisiss", $numero, $nombre, $registro, $fecha_nacimiento, $padre_numero, $padre_registro, $madre_numero, $madre_registro, $clasificacion, $peso_205dias, $altura_sacro_destete, $peso_18meses, $fecha_entrada_toro, $peso_entrada_toro, $foto, $hacienda)) {
        $mensaje.= $conexion->error;
    }

    if ($sentencia->execute()) {
        $mensaje.= crearInventario($conexion, $numero);
        $mensaje.= "Vaca registrada con éxito";
    } else {
        $mensaje = "Error al registrar una nueva vaca. <br> La vaca se encuentra creada en la base de datos";
    }

    $sentencia->close();
    $conexion->close();
    echo $mensaje;
}

function crearInventario($conexion, $numero) {
    $mensaje = '';
    $sql = "INSERT INTO `inventario`(`id_vaca`,`estado`,`observaciones`,`fecha_consulta`) VALUES ($numero,'viva','','')";
    if (mysqli_query($conexion, $sql)) {
        $mensaje.='Registrada en inventario automáticamente';
    } else {
        $mensaje.='Actualmente se encuentra creado en inventario';
    }
    echo $mensaje;
}

function registrarCria() {
    if (!$conexion = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $hacienda = $_SESSION['hacienda'];
    $mensaje = "";

    $id_vaca = (int) $_POST['madre'];
    $padre = (int) $_POST['padre'];
    $fecha_parto = date('Y-m-d', strtotime($_POST['nacimiento']));
    $sexo = $_POST['sexo'];
    $numero_cria = $_POST['numero'];
    $inter_parto = $_POST['inter_parto'];
    $peso_nacimiento = (int) $_POST['peso_nacimiento'];
    $fecha_destete = $_POST['fecha_destete'];
    $peso_destete = $_POST['peso_destete'];
    $peso_205dias = $_POST['peso_205dias'];
    $indice1 = $_POST['indice1'];
    $peso_18meses = $_POST['peso_18meses'];
    $indice2 = $_POST['indice2'];
    $observaciones = $_POST['observaciones'];



    $sql = "INSERT INTO `cria`(`id_vaca`, `padre`, `fecha_parto`, `sexo`, `numero_cria`, `inter_parto`,`peso_nacimiento`, `fecha_destete`,"
            . " `peso_destete`, `peso_205dias`, `indice1`, `peso_18meses`, `indice2`, `observaciones`)"
            . " select v.numero,?,?,?,?,?,?,?,?,?,?,?,?,? from vaca v, hacienda h where v.numero=? and v.hacienda=h.id and h.nombre=?";
    if (!$sentencia = $conexion->prepare($sql)) {
        $mensaje.= $conexion->error;
    }
    if (!$sentencia->bind_param("issssisiisissis", $padre, $fecha_parto, $sexo, $numero_cria, $inter_parto, $peso_nacimiento, $fecha_destete, $peso_destete, $peso_205dias, $indice1, $peso_18meses, $indice2, $observaciones, $id_vaca, $hacienda)) {
        $mensaje.= $conexion->error;
    }

    if ($sentencia->execute()) {
        $mensaje = "Cría registrada con éxito";
    } else {
        $mensaje = "Error al registrar una nueva cría" . $sentencia->error;
    }

    $sentencia->close();
    $conexion->close();
    echo $mensaje;
}

function editarCria() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $hacienda = $_SESSION['hacienda'];
    $clave = $_POST['clave'];
    $numero_cria = $_POST['numero_cria'];

    $pos = stripos($clave, 'peso');

    if ($pos !== false) {
        $param = "iss";
        $valor = (int) $_POST['valor'];
    } else {
        $param = "sss";
        $valor = $_POST['valor'];
    }

    $sql = "UPDATE cria c, vaca v, hacienda h SET c." . $clave . "=? WHERE c.numero_cria=? and c.id_vaca=v.numero and v.hacienda=h.id and h.nombre=?";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param($param, $valor, $numero_cria, $hacienda)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->execute()) {
        $mensaje .= "No se ha podido actualizar";
    } else {
        $mensaje = "Campo actualizado";
    }
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function editarFenotipo() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $clave = $_POST['clave'];
    $vaca = $_POST['vaca'];
    $valor = $_POST['valor'];
    $hacienda = $_SESSION['hacienda'];

    $sql = "UPDATE fenotipo f, vaca v, hacienda h SET f." . $clave . "=? WHERE f.id_vaca=v.numero and v.numero=? and v.hacienda=h.id and h.nombre=?; ";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param('sss', $valor, $vaca, $hacienda)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->execute()) {
        $mensaje .= "No se ha podido actualizar";
    } else {
        $mensaje = "Campo actualizado";
    }
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function editarVaca() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $clave = $_POST['clave'];
    $vaca = $_POST['vaca'];
    $hacienda = $_SESSION['hacienda'];

    $pos = stripos($clave, 'peso');

    if ($pos === true) {
        $param = "iss";
        $valor = (int) $_POST['valor'];
    } else {
        $param = "sss";
        $valor = $_POST['valor'];
    }

    $sql = "UPDATE vaca v, hacienda h SET v." . $clave . "=? WHERE v.numero=? and v.hacienda=h.id and h.nombre=?";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param($param, $valor, $vaca, $hacienda)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->execute()) {
        $mensaje .= "No se ha podido actualizar";
    } else {
        $mensaje = "Campo actualizado";
    }
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function cargarReproduccion() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $codigo_vaca = (int) $_POST['vaca'];
    $hacienda = $_SESSION['hacienda'];

    $sql = "SELECT r.`id`,`fecha`, `toro1`, `toro2`, `fecha_1ia`, `toro_1ia`, `fecha_2ia`, `toro_2ia`, `fecha_3iamn`, `toro_3iamn`, `fecha_mn`,"
            . " `toro_mn`, `fecha_1pal`, `res_1pal`, `fecha_2pal`, `res_2pal`, `fecha_3pal`, `res_3pal` "
            . "FROM reproduccion r, vaca v, hacienda h WHERE r.id_vaca=v.numero and v.numero=? and v.hacienda=h.id and h.nombre=?";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param("is", $codigo_vaca, $hacienda)) {
        $mensaje.= $mysqli->error;
    }

    if ($sentencia->execute()) {
        $sentencia->bind_result($id, $fecha, $toro1, $toro2, $fecha_1ia, $toro_1ia, $fecha_2ia, $toro_2ia, $fecha_3iamn, $toro_3iamn, $fecha_mn, $toro_mn, $fecha_1pal, $res_1pal, $fecha_2pal, $res_2pal, $fecha_3pal, $res_3pal);
        while ($sentencia->fetch()) {
            $mensaje.='<tr>
                    <td class="col-md-1 no-padding">
                        F
                    </td>
                    <td class="col-md-1" colspan="2">
                        <input type="date" id="fecha' . $id . '" value="' . $fecha . '" disabled>
                    </td>
                    <td class="col-md-2">
                        <input type="date" id="fecha_1ia' . $id . '" name="fecha_1ia' . $id . '" value="' . $fecha_1ia . '" onblur="editar_reproduccion(&fecha_1ia&,&' . $id . '&)">
                    </td>
                    <td class="col-md-2">
                        <input type="date" id="fecha_2ia' . $id . '" name="fecha_2ia' . $id . '" value="' . $fecha_2ia . '"onblur="editar_reproduccion(&fecha_2ia&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1">
                        <input type="date" id="fecha_3iamn' . $id . '" name="fecha_3iamn' . $id . '" value="' . $fecha_3iamn . '"onblur="editar_reproduccion(&fecha_3iamn&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1">
                        <input type="date" id="fecha_mn' . $id . '" name="fecha_mn' . $id . '" value="' . $fecha_mn . '"onblur="editar_reproduccion(&fecha_mn&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1 no-padding">
                        F <input type="date" id="fecha_1pal' . $id . '" name="fecha_1pal' . $id . '" value="' . $fecha_1pal . '"onblur="editar_reproduccion(&fecha_1pal&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1 no-padding">
                        F <input type="date" id="fecha_2pal' . $id . '" name="fecha_2pal' . $id . '" value="' . $fecha_2pal . '"onblur="editar_reproduccion(&fecha_1pal&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1 no-padding">
                        F <input type="date" id="fecha_3pal' . $id . '" name="fecha_3pal' . $id . '" value="' . $fecha_3pal . '"onblur="editar_reproduccion(&fecha_1pal&,&' . $id . '&)">
                    </td>
                </tr>
                <tr>
                    <td class="col-md-1 no-padding">
                        T
                    </td>
                    <td class="col-md-1">
                        <input type="text" id="toro1' . $id . '" value="' . $toro1 . '" onblur="editar_reproduccion(&toro1&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1">
                        <input type="text" id="toro2' . $id . '" value="' . $toro2 . '" onblur="editar_reproduccion(&toro2&,&' . $id . '&)">
                    </td>
                    <td class="col-md-2">
                        <input type="text" id="toro_1ia' . $id . '" name="toro_1ia' . $id . '" value="' . $toro_1ia . '" onblur="editar_reproduccion(&toro_1ia&,&' . $id . '&)">
                    </td>
                    <td class="col-md-2">
                        <input type="text" id="toro_2ia' . $id . '" name="toro_2ia' . $id . '" value="' . $toro_2ia . '" onblur="editar_reproduccion(&toro_2ia&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1">
                        <input type="text" id="toro_3iamn' . $id . '" name="toro_3iamn' . $id . '" value="' . $toro_3iamn . '" onblur="editar_reproduccion(&toro_3iamn&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1">
                        <input type="text" id="toro_mn' . $id . '" name="toro_mn' . $id . '" value="' . $toro_mn . '" onblur="editar_reproduccion(&toro_mn&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1 no-padding">
                        R <input type="text" id="res_1pal' . $id . '" name="res_1pal' . $id . '" value="' . $res_1pal . '" onblur="editar_reproduccion(&res_1pal&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1 no-padding">
                        R <input type="text" id="res_2pal' . $id . '" name="res_2pal' . $id . '" value="' . $res_2pal . '" onblur="editar_reproduccion(&res_2pal&,&' . $id . '&)">
                    </td>
                    <td class="col-md-1 no-padding">
                        R <input type="text" id="res_3pal' . $id . '" name="res_3pal' . $id . '" value="' . $res_3pal . '" onblur="editar_reproduccion(&res_3pal&,&' . $id . '&)">
                    </td>
                </tr>';
        }
    } else {
        $mensaje.='<tr>LA VACA NO TIENE CRÍAS</tr>';
    }
//    $mensaje='["juan","pedro","jacinto"]';
    $sentencia->close();
    $mysqli->close();
    $mensaje = str_replace('&', "'", $mensaje);
    echo $mensaje;
}

function editarReproduccion() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
    $mensaje = "";
    $clave = $_POST['clave'];
    $id = $_POST['id'];
    $hacienda = $_SESSION['hacienda'];
    $valor = $_POST['valor'];


    $sql = "UPDATE reproduccion r, hacienda h, vaca v SET r." . $clave . "=? WHERE r.id=? and r.id_vaca=v.numero and  v.hacienda=h.id and h.nombre=?";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param('sss', $valor, $id, $hacienda)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->execute()) {
        $mensaje .= "No se ha podido actualizar";
    } else {
        $mensaje = "Campo actualizado";
    }
    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function registrarReproduccion() {
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }

    $mensaje = "";
    $fecha = $_POST['fecha'];
    $vaca = $_POST['vaca'];
    $hacienda = $_SESSION['hacienda'];

    $sql = "INSERT INTO `reproduccion` (`id`, `id_vaca`, `fecha`, `toro1`, `toro2`, `fecha_1ia`, `toro_1ia`, `fecha_2ia`, `toro_2ia`, 
        `fecha_3iamn`, `toro_3iamn`, `fecha_mn`, `toro_mn`, `fecha_1pal`, `res_1pal`, `fecha_2pal`, `res_2pal`, `fecha_3pal`, `res_3pal`)
        SELECT '',v.numero,r.fecha,'','','','','','','','','','','','','','','','' FROM reproduccion r, vaca v, hacienda h 
        WHERE r.fecha=? AND v.numero=? AND v.hacienda=h.id AND h.nombre=?";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param('sss', $fecha, $vaca, $hacienda)) {
        $mensaje.= $mysqli->error;
    }
    if ($sentencia->execute()) {
        $mensaje = "programa registrado con éxito";
    } else {
        $mensaje = "Error al registrar un nuevo programa" . $sentencia->error;
    }

    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}

function actualizarInventario(){
    if (!$mysqli = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }

    $mensaje = "";
    $estado = $_POST['estado'];
    $observaciones = $_POST['observaciones'];
    $vaca = (int)$_POST['vaca'];
    $hacienda = $_SESSION['hacienda'];

    $sql = "UPDATE `inventario` i, vaca v, hacienda h SET `id_vaca`=?,`estado`=?,`observaciones`=? WHERE id_vaca=v.numero and v.hacienda=h.id and h.nombre=?;";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param('isss', $vaca,$estado,$observaciones,$hacienda)) {
        $mensaje.= $mysqli->error;
    }
    if ($sentencia->execute()) {
        $mensaje = "vaca actualizada con éxito";
    } else {
        $mensaje = "Error al en el inventario" . $sentencia->error;
    }

    $sentencia->close();
    $mysqli->close();
    echo $mensaje;
}
?>

