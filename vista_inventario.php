<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php  
    include 'controlador/seguridadUsuarioAdmin.php';
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilos_generales.css">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/datatables.css">
        <!--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">-->        
        <script type="text/javascript" src="./css/bootstrap/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="./css/bootstrap/js/bootstrap.min.js"></script>
        <!--<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>-->        
        <script type="text/javascript" src="js/hacienda.js"></script>
        <script type="text/javascript" src="js/datatables.js"></script>        

        <title>Vista inventario</title>
    </head>
    <body>
        <?php
        include_once './head_vista_usuario.php';
        ?>
        <div class="container" style="padding-top: 70px">

            <h2>Sistema para la administración del ganado</h2>
            <input type="hidden" name="hacienda" id="hacienda" value="<?php echo $_SESSION['hacienda']; ?>">

            <ul class="nav nav-tabs">
                <li role="presentation"><a href="./vista_usuario_1.php">Inicio</a></li>
                <li role="presentation"><a href="?general">Información general hacienda</a></li>
                <li role="presentation"><a href="?fecha_inicio">Información por fecha</a></li>
                <li role="presentation"><a href="?historial_vaca">Información por animal</a></li>
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
                    case 'fecha_inicio':
                        $imp = 2;
                        include 'datos_inventario_fecha.php';
                        break;                    
                    case 'historial_vaca':
                        $imp = 3;
                        include 'datos_inventario_vaca.php';
                        break;                    
                }
                if ($imp === 0) {
                    echo ('No existe esta sección');
                }
            }
            ?> 
        </div>
    </body>
</html>
