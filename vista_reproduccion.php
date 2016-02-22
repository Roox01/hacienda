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
        <title>Vista reproducción</title>
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
                            <input type="hidden" name="opcion" id="opcion" value="reproduccion">
                            <input type="text" class="form-control" id="codigoVaca" name="codigoVaca" placeholder="Ver otro animal">
                        </div>                        
                        <button type="submit" class="btn btn-default" >Buscar</button>
                    </form>
                </div>
            </div>

            <ul class="nav nav-tabs">
                <li role="presentation"><a href="./vista_usuario_1.php">Inicio</a></li>
                <li role="presentation"><a href="?general">Datos de reproducción</a></li>
            </ul>
            <?php
            $seccion = basename($_SERVER['QUERY_STRING']);
            if (empty($seccion)) {
                include 'datos_reproduccion.php';
            } else {
                $imp = 0;
                switch ($seccion) {
                    case 'general':
                        $imp = 1;
                        include 'datos_reproduccion.php';
                        break;
                }
                if ($imp == 0) {
                    echo $seccion + (': No existe esta sección');
                }
            }
            ?> 
        </div>

        <?php
        ?>
    </body>
</html>
