<?php

//function ingresar() {
require_once 'conexionMySqli.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$user = $_POST['user'];
$pass = $_POST['password'];
$hacienda = $_POST['hacienda'];

if (!$mysqli = new mysqli('localhost', 'root', '', 'hacienda')) {
    die("Error al conectarse a la base de datos");
}

require_once('conexionMySqli.php');

try {
    //preparacion de la consulta
    $sql = "SELECT usuario.nombre_usuario, usuario.password 
        FROM usuario WHERE usuario.nombre_usuario=? AND usuario.password =?";

    //PREPARAMOS EL PROCEDIMIENTO
    if (!$sentencia = $mysqli->prepare($sql)) {
        print $mysqli->error;
    }

    //LE PASAMOS LOS PARAMETROS; "SS" SIGNIFICA QUE SON STRINGS
    if (!$sentencia->bind_param("ss", $user, $pass)) {
        print $mysqli->error;
    }

    //EJECUTAMOS LA CONSULTA
    if (!$sentencia->execute()) {
        print $mysqli->error;
        die("Fallo en la ejecucion");
    }

//    print_r($sentencia);
//    echo "<br>";

    $resultado = $sentencia->get_result();
    print_r($resultado);
    echo "<br>";

    $fila_recuperada = $resultado->fetch_array(MYSQLI_ASSOC);
    $usuario = $fila_recuperada['nombre_usuario'];
    $password = $fila_recuperada['password'];

    print_r($fila_recuperada);
    echo "<br>";


    //SI EL PARAMETRO RESULT ES MAYOR A 0, QUIERE DECIR QUE ENCONTRAMOS UN usuario CON LOS CRITERIOS DE BUSQUEDA.
    if (!empty($fila_recuperada)) {
//        $fila_recuperada = $resultado->fetch(MYSQLI_ASSOC);
        print_r($fila_recuperada);
        echo "<br>";

        $_SESSION['nombre'] = $user; //CREAMOS UNA SESSION CON EL nombre DE LA PERSONA PARA MOSTRARLO   
        $_SESSION['sesion'] = "activa";
        $_SESSION['hacienda'] = $hacienda;
        header('location: ../vista_usuario_1.php');
        //ADMIN, EN NUESTRA TABLA usuarios, ADMIN LO IDENTIFICAMOS CON 1.        
    } else {
        echo '<script language="javascript">window.location="../index.php"; alert("Usuario no registrado en la base de datos"); </script>';


//            print 'Usuario no registrado'; // EN CASO DE EL PARAMETRO OUT RESULT SET 0 MANDA MENSAJE  usuario NO REGISTRADO
    }

    $mysqli->close();
} catch (Exception $e) {
    print 'Hubo un error';
}
?>