<div class="col-md-12">
    <div class="col-md-offset-4 col-md-4">
        <div class="col-md-6">            
            <h4><strong>Código</strong></h4>
        </div>
        <div class="col-md-6">            
            <h4><?php echo $_SESSION['vaca']; ?></h4>
        </div>
    </div>
    <div class="col-md-4">
        <p style="visibility: hidden">a</p>
    </div>
</div>
<div class="col-md-12">
    <form>
        <table class="table-bordered table-responsive" id="datos_reproduccion">
            <thead>
                <tr style="text-align: center">
                    <td class="col-md-4" colspan="3">
                        <strong>Programación</strong>
                    </td>
                    <td class="col-md-4" colspan="4">
                        <strong>INSEMINACIÓN O MONTA NATURAL</strong>
                    </td>
                    <td class="col-md-4" colspan="3">
                        <strong>Vaca N°</strong>
                    </td>
                </tr>
                <tr style="text-align: center">
                    <td class="col-md-1" rowspan="2">

                    </td>
                    <td class="col-md-1" rowspan="2">
                        I.A.
                    </td>
                    <td class="col-md-1" rowspan="2">
                        M.N.
                    </td>
                    <td class="col-md-2">
                        1 I.A.
                    </td>
                    <td class="col-md-2">
                        2 I.A.
                    </td>
                    <td class="col-md-1">
                        3 I.A.
                    </td>
                    <td class="col-md-1" rowspan="2">
                        M.N.
                    </td>
                    <td class="col-md-3" colspan="3">
                        Palpaciones
                    </td>
                </tr>
                <tr>           
                    <td class="col-md-2">

                    </td>
                    <td class="col-md-2">

                    </td>
                    <td class="col-md-1">
                        M.N. 
                    </td>
                    <td class="col-md-1" style="text-align: center">
                        1<sup>a</sup>
                    </td>
                    <td class="col-md-1" style="text-align: center">
                        2<sup>a</sup>
                    </td>
                    <td class="col-md-1" style="text-align: center">
                        3<sup>a</sup>
                    </td>
                </tr>
            </thead>
            <tbody>
<!--                <tr>
                    <td class="col-md-1 no-padding">
                        F
                    </td>
                    <td class="col-md-1" colspan="2">
                        <input type="date" id="fecha-'.$id.'" value="'.$fecha.'" disabled>
                    </td>
                    <td class="col-md-2">
                        <input type="date" id="fecha_1ia-'.$id.'" name="fecha_1ia-'.$id.'" value="'.$fecha_1ia.'">
                    </td>
                    <td class="col-md-2">
                        <input type="date" id="fecha_2ia-'.$id.'" name="fecha_2ia-'.$id.'" value="'.$fecha_2ia.'">
                    </td>
                    <td class="col-md-1">
                        <input type="date" id="fecha_3iamn-'.$id.'" name="fecha_3iamn-'.$id.'" value="'.$fecha_3iamn.'">
                    </td>
                    <td class="col-md-1">
                        <input type="date" id="fecha_mn-'.$id.'" name="fecha_mn-'.$id.'" value="'.$fecha_mn.'">
                    </td>
                    <td class="col-md-1 no-padding">
                        F <input type="date" id="fecha_1pal-'.$id.'" name="fecha_1pal-'.$id.'" value="'.$fecha_1pal.'">
                    </td>
                    <td class="col-md-1 no-padding">
                        F <input type="date" id="fecha_2pal-'.$id.'" name="fecha_2pal-'.$id.'" value="'.$fecha_2pal.'">
                    </td>
                    <td class="col-md-1 no-padding">
                        F <input type="date" id="fecha_3pal-'.$id.'" name="fecha_3pal-'.$id.'" value="'.$fecha_3pal.'">
                    </td>
                </tr>
                <tr>
                    <td class="col-md-1 no-padding">
                        T
                    </td>
                    <td class="col-md-1">
                        <input type="text" id="toro1-'.$id.'" value="'.$toro1.'">
                    </td>
                    <td class="col-md-1">
                        <input type="text" id="toro2-'.$id.'" value="'.$toro2.'">
                    </td>
                    <td class="col-md-2">
                        <input type="text" id="toro_1ia-'.$id.'" name="toro_1ia-'.$id.'" value="'.$toro_1ia.'">
                    </td>
                    <td class="col-md-2">
                        <input type="text" id="toro_2ia-'.$id.'" name="toro_2ia-'.$id.'" value="'.$toro_2ia.'">
                    </td>
                    <td class="col-md-1">
                        <input type="text" id="toro_2iamn-'.$id.'" name="toro_3iamn-'.$id.'" value="'.$toro_3iamn.'">
                    </td>
                    <td class="col-md-1">
                        <input type="text" id="toro_mn-'.$id.'" name="toro_mn-'.$id.'" value="'.$toro_mn.'">
                    </td>
                    <td class="col-md-1 no-padding">
                        R <input type="text" id="res_1pal'.$id.'" name="res_1pal'.$id.'" value="'.$res_1pal.'">
                    </td>
                    <td class="col-md-1 no-padding">
                        R <input type="text" id="res_2pal-'.$id.'" name="res_2pal-'.$id.'" value="'.$res_2pal.'">
                    </td>
                    <td class="col-md-1 no-padding">
                        R <input type="text" id="res_3pal-'.$id.'" name="res_3pal-'.$id.'" value="'.$res_3pal.'">
                    </td>
                </tr>-->

            </tbody>
        </table>
    </form>
</div>


<!-- Button trigger modal -->
<div class="btn-group" style="margin-top: 2em; margin-left: 1em">
    <button type="button" class="btn btn-ok" data-toggle="modal" data-target="#programar">
        Programar monta o inseminación artificial
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="programar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registro de programación M.N. o I.A.</h4>
            </div>
            <form>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" id="fecha_programar" placeholder="Fecha en que se realiza el procedimiento">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="b" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="registrar_reproduccion" class="btn btn-ok" onclick="registrar_programa();">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="res_reproduccion"></div>
<script>
    $(document).ready(function () {
        cargar_reproduccion();
    });

    

</script>