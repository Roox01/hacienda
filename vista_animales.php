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
        
        <title>Vista animales</title>
    </head>
    <body>
        <?php
        include_once './head_vista_usuario.php';
        ?>
        <div class="container" style="padding-top: 70px">

            <h2>Sistema para la administración del ganado</h2>
            <input type="hidden" name="vaca" id="vaca" value="<?php echo$_POST['codigoVaca'];?>">

            <ul class="nav nav-tabs">
                <li role="presentation"><a href="./vista_usuario_1.php">Inicio</a></li>
                <li role="presentation"><a href="?general">Información general</a></li>
                <li role="presentation"><a href="?crias">Crías</a></li>
                <li role="presentation"><a href="?clasif">Clasificación fenotípica</a></li>
            </ul>
            <?php
            $seccion = basename($_SERVER['QUERY_STRING']);
            if (empty($seccion)) {
                include 'datos_generales.php';
            } else {
                $imp = 0;
                switch ($seccion) {
                    case 'general':
                        $imp = 1;
                        include 'datos_generales.php';
                        break;
                    case 'crias':
                        $imp = 1;
                        include 'datos_crias.php';
                        break;
                    case 'tabla':
                        $imp = 1;
                        include 'datos_generales_tabla.php';
                        break;
                    case 'clasif':
                        $imp = 1;
                        include 'clasificacion_fenotipica.php';
                        break;
                }
                if ($imp === 0) {
                    echo $seccion + (': No existe esta sección');
                }
            }
            ?> 
        </div>

        <?php
        ?>
    </body>
</html>
