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
        <script type="text/javascript" src="./css/bootstrap/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="./css/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vaca.js"></script>

        <title>Vista animales</title>
    </head>
    <body>
        <?php
        include_once './head_vista_usuario.php';
        ?>
        <div class="container" style="padding-top: 70px">

            <div class="col-sm-12">
                <div class="col-sm-7">
                    <h2>Sistema para la administración del ganado</h2>
                    <input type="hidden" name="vaca" id="vaca" value="<?php echo $_SESSION['vaca'] ?>">
                </div>
                <div class="col-sm-5" style="margin-top: 2em">
                    <form class="form-inline" action="controlador/consulta.php" method="post">
                        <div class="form-group">
                            <label for="vacas">Código animal</label>
                            <input type="hidden" name="opcion" id="opcion" value="consulta">
                            <input type="text" class="form-control" id="codigoVaca" name="codigoVaca" placeholder="Ver otro animal">
                        </div>                        
                        <button type="submit" class="btn btn-default" >Buscar</button>
                    </form>
                </div>
            </div>


            <ul class="nav nav-tabs">
                <li role="presentation"><a href="./vista_usuario_1.php">Inicio</a></li>
                <li role="presentation"><a href="?general">Información general</a></li>
                <li role="presentation"><a href="?crias">Crías</a></li>
                <li role="presentation"><a href="?clasif">Clasificación fenotípica</a></li>
            </ul>
            <h4>Vaca N° <?php echo $_SESSION['vaca'] ?></h4>
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

    </body>
</html>
