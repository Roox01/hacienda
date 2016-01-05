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

    if (!$mysqli = new mysqli('localhost', 'root', '', 'pasantia')) {
        die("Error al conectarse a la base de datos");
    }
    
    require_once('conexionMySqli.php');

    try {
        //preparacion de la consulta
        $sql = "SELECT usuario.nombre_usuario, usuario.apellido_usuario 
        FROM usuario WHERE usuario.nombre_usuario=? AND usuario.apellido_usuario =?";

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
        $password = $fila_recuperada['codigo_usuario'];

        print_r($fila_recuperada);
        echo "<br>";


        //SI EL PARAMETRO RESULT ES MAYOR A 0, QUIERE DECIR QUE ENCONTRAMOS UN usuario CON LOS CRITERIOS DE BUSQUEDA.
        if (!empty($fila_recuperada)) {
//        $fila_recuperada = $resultado->fetch(MYSQLI_ASSOC);
            print_r($fila_recuperada);
            echo "<br>";

            $_SESSION['nombre'] = $nombre_usuario; //CREAMOS UNA SESSION CON EL nombre DE LA PERSONA PARA MOSTRARLO   
            $_SESSION['sesion']= "activa";
            header('location: ../vista_usuario_1.php');
            //ADMIN, EN NUESTRA TABLA usuarios, ADMIN LO IDENTIFICAMOS CON 1.        
        } else {
            echo '<script language="javascript">window.location="../index.php"; alert("Usuario no registrado en la base de datos"); </script>'; 
            
            
//            print 'Usuario no registrado'; // EN CASO DE EL PARAMETRO OUT RESULT SER 0 MANDA MENSAJE  usuario NO REGISTRADO
        }

        $mysqli->close();
    } catch (Exception $e) {
        print 'Hubo un error';
    }




//// Output the compiled query
//debug($sql, $params);
//
//function debug($statement, array $params = [])
//{
//    $statement = preg_replace_callback(
//        '/[?]/',
//        function ($k) use ($params) {
//            static $i = 0;
//            return sprintf("'%s'", $params[$i++]);
//        },
//        $statement
//    );
//
//    echo '<pre>Query Debug:<br>', $statement, '</pre>';
//}
//}

?>