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
    if (!$sentencia->bind_param("is",$codigo_vaca,$hacienda)) {
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
    if (!$sentencia->bind_param("is", $codigo_vaca,$hacienda)) {
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
                <td><input type="text" id="fecha_destete' . $numero_cria . '" value="' . $fecha_destete . '" onblur="editar_cria(&fecha_destete&,&' . $numero_cria . '&);"></td>
                <td><input type="text" maxlength="5" id="peso_destete' . $numero_cria . '" value="' . $peso_destete . '"onblur="editar_cria(&peso_destete&,&' . $numero_cria . '&);"></td>
                <td><input type="text" maxlength="5" id="peso_205dias' . $numero_cria . '" value="' . $peso_205dias . '"onblur="editar_cria(&peso_205dias&,&' . $numero_cria . '&);"></td>
                <td><input type="text" maxlength="30" id="indice1' . $numero_cria . '" value="' . $indice1 . '"onblur="editar_cria(&indice1&,&' . $numero_cria . '&);"></td>
                <td><input type="text" maxlength="5" id="peso_18meses' . $numero_cria . '" value="' . $peso_18meses . '"onblur="editar_cria(&peso_18meses&,&' . $numero_cria . '&);"></td>
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
        $mensaje=crearFenotipo($conexion,$numero);
        $mensaje.= "Vaca registrada con éxito";
    } else {
        $mensaje = "Error al registrar una nueva vaca. <br> La vaca se encuentra creada en la base de datos" ;
    }
    

    $sentencia->close();
    $conexion->close();
    echo $mensaje;
}

function crearFenotipo($conexion,$numero){
    $sql = "INSERT INTO `fenotipo`(`id_vaca`) VALUES ($numero)";
    if(mysqli_query($conexion, $sql)){
        $mensaje.='Fenotipo creado automáticamente';
    }else{
        $mensaje.='Actualmente el fenotipo se encuentra creado en la base de datos';
    }    
    echo $mensaje;
}

function registrarCria() {
    if (!$conexion = new mysqli("localhost", "root", "", "hacienda")) {
        die("Error al conectarse a la base de datos");
    }
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
            . " VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    if (!$sentencia = $conexion->prepare($sql)) {
        $mensaje.= $conexion->error;
    }
    if (!$sentencia->bind_param("iissssisiisiss", $id_vaca, $padre, $fecha_parto, $sexo, $numero_cria, $inter_parto, $peso_nacimiento, $fecha_destete, $peso_destete, $peso_205dias, $indice1, $peso_18meses, $indice2, $observaciones)) {
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
    $clave = $_POST['clave'];
    $numero_cria = $_POST['numero_cria'];

    $pos = stripos($clave, 'peso');

    if ($pos !== false) {
        $param="is";
        $valor = (int) $_POST['valor'];
    } else {
        $param="ss";
        $valor = $_POST['valor'];
    }

    $sql = "UPDATE cria c SET c." . $clave . "=? WHERE c.numero_cria=? ;";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param($param, $valor, $numero_cria)) {
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
    
    $sql = "UPDATE fenotipo f SET f." . $clave . "=? WHERE f.id_vaca=? ;";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param('ss', $valor, $vaca)) {
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

    $pos = stripos($clave, 'peso');

    if ($pos !== false) {
        $param="is";
        $valor = (int) $_POST['valor'];
    } else {
        $param="ss";
        $valor = $_POST['valor'];
    }

    $sql = "UPDATE vaca v SET v." . $clave . "=? WHERE v.numero=? ;";

    if (!$sentencia = $mysqli->prepare($sql)) {
        $mensaje.= $mysqli->error;
    }
    if (!$sentencia->bind_param($param, $valor, $vaca)) {
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
?>

