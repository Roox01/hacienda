<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html id="index">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilos_generales.css">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="css/bootstrap/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="js/vaca.js"></script>
        <title>Sistema de gestión de ganado vacuno</title>

    </head>
    <body>
        <div class="container">
            <div class="well login" id="well_login">
                <div style="text-align: center;margin-bottom: 3px;">
                    <img id="imagen_login" src="./imagenes/fondo_1.jpg">
                </div>
                <form class="form-horizontal" action="controlador/loginUsuario.php" method="POST">
                    <div class="form-group">
                        <label for="hacienda" class="col-sm-1 control-label"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></label>
                        <div class="col-sm-11">
                            <select id="hacienda" name="hacienda" style="width: 100%" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user" class="col-sm-1 control-label"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                        <div class="col-sm-11">
                            <input id="user" name="user" type="text" class="form-control"  placeholder="Usuario" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-1 control-label"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                        <div class="col-sm-11">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                    </div>                    
                    <div class="form-group" style="text-align: center;margin-left: -10%">
                        <div class="col-sm-offset-1 col-sm-11">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Recordarme
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center;margin-left: -10%">
                        <div class="col-sm-offset-1 col-sm-11">
                            <button type="submit" name="action" class="btn btn_naranja"> Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
        <script>
            $(document).ready(function () {  
                cargar_haciendas();                
            });
        </script>
    </body>    
</html>
