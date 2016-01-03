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
        <title></title>
    </head>
    <body>
        <?php
        include_once './head_vista_usuario.php';
        ?>
        <div class="container">
            <div class="jumbotron" id="jumbotron">
                <h1>Bienvenido!</h1>
                <p>Bienvenido al sistema para la gestión de ganado</p>
            </div>
            <div id="secciones" style="overflow: hidden">
                <div class="col-lg-4" style="border: 10px">
                    <a>
                        <div id="top_left cuadro_info">
                            <h4>ANIMALES</h4>
                            <p>0</p>
                            <img src="./imagenes/vaca_img.png" alt="vaca" width="30%" height="30%">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" style="border: 10px">
                    <a>
                        <div id="top_middle cuadro_info">
                            <h4>REPRODUCCIÓN</h4>
                            <p>0 Hembras con preñez confirmada</p>
                            <img id="imagen_repro" src="./imagenes/reproduccion.png" alt="Reprodución" width="20%" height="20%" style="visibility: hidden">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" style="border: 10px">
                    <a>
                        <div id="top_rigth cuadro_info">
                            <h4>INVENTARIO</h4>
                            <p>Control hacienda</p>
                            <img src="./imagenes/inventario.png" alt="inventario" width="30%" height="30%">
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <?php
        ?>
    </body>
</html>
