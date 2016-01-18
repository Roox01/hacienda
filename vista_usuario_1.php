<?php include("controlador/seguridadUsuarioAdmin.php");
?>

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
                    <a type="button" data-toggle="modal" data-target="#busquedaAnimales">
                        <div id="top_left cuadro_info">
                            <h4>ANIMALES</h4>
                            <p>0</p>
                            <img src="./imagenes/vaca_img.png" alt="vaca" width="30%" height="30%">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" style="border: 10px">
                    <a type="button" data-toggle="modal" data-target="#busquedaReproduccion">
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
            <div id="secciones" style="overflow: hidden">
                <div class="col-lg-4" style="border: 10px">
                    <a>
                        <div id="left cuadro_info">
                            <h4>REGISTRO</h4>
                            <p></p>
                            <img src="./imagenes/reproduccion.png" alt="vaca" width="25%" height="25%">
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="busquedaAnimales" tabindex="-1" role="dialog" aria-labelledby="busquedaAnimales">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Búsqueda de animal</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="vista_animales.php" method="POST">
                            <div class="form-group">                                
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="codigoVaca" id="inputCodigoVaca" placeholder="Ingrese aquí el código de la vaca">
                                </div>
                            </div>                       

                            <div class="form-group">
                                <div class="col-sm-10">
                                    <button type="submit" name="action" class="btn btn-ok">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="busquedaReproduccion" tabindex="-1" role="dialog" aria-labelledby="busquedaReproduccion">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Búsqueda reproducción</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">                                
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputCodigoVaca" placeholder="Ingrese aquí el código de la vaca">
                                </div>
                            </div>                       

                            <div class="form-group">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-ok">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
        
    </body>
</html>
