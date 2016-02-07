<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilos_generales.css">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="./css/bootstrap/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="./css/bootstrap/js/bootstrap.min.js"></script>

        <title>Vista inventario</title>
    </head>
    <body>
        <?php
        include_once './head_vista_usuario.php';
        ?>
        <div class="container" style="padding-top: 70px">

            <h2>Sistema para la administración del ganado</h2>
            <input type="hidden" name="vaca" id="vaca" value="<?php echo$_POST['codigoVaca']; ?>">

            <ul class="nav nav-tabs">
                <li role="presentation"><a href="./vista_usuario_1.php">Inicio</a></li>
                <li role="presentation"><a href="?general">Información general</a></li>
            </ul>
            <?php
            $seccion = basename($_SERVER['QUERY_STRING']);
            if (empty($seccion)) {
                include 'datos_inventario.php';
            } else {
                $imp = 0;
                switch ($seccion) {
                    case 'general':
                        $imp = 1;
                        include 'datos_inventario.php';
                        break;                    
                }
                if ($imp === 0) {
                    echo $seccion + (': No existe esta sección');
                }
            }
            ?> 
        </div>
    </body>
</html>
