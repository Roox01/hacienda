<div class="col-md-12">
    <div class="col-md-offset-4 col-md-4">
        <div class="col-md-6">            
            <h4><strong>Código</strong></h4>
        </div>
        <div class="col-md-6">            
            <h4><?php echo $_SESSION['vaca'];?></h4>
        </div>
    </div>
    <div class="col-md-4">
        <p style="visibility: hidden">a</p>
    </div>
</div>
<div class="col-md-12">
    <form>
        <table class="table-bordered">
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
            <tr>
                <td class="col-md-1 no-padding">
                    F
                </td>
                <td class="col-md-1" colspan="2">
                    <input type="text" id="input_1">
                </td>
                <td class="col-md-2">
                    <input type="text" id="input_1" name="fecha_vez_1" value="----">
                </td>
                <td class="col-md-2">
                    <input type="text" id="input_2" name="fecha_vez_2" value="----">
                </td>
                <td class="col-md-1">
                    <input type="text" id="input_3" name="fecha_vez_3" value="----">
                </td>
                <td class="col-md-1">
                    <input type="text" id="input_4" name="fecha_M_N" value="----">
                </td>
                <td class="col-md-1 no-padding">
                    F <input type="text" id="input_5" name="fecha_palpacion_1" value="----">
                </td>
                <td class="col-md-1 no-padding">
                    F <input type="text" id="input_5" name="fecha_palpacion_2" value="----">
                </td>
                <td class="col-md-1 no-padding">
                    F <input type="text" id="input_5" name="fecha_palpacion_3" value="----">
                </td>
            </tr>
            <tr>
                <td class="col-md-1 no-padding">
                    T
                </td>
                <td class="col-md-1">
                    <input type="text" id="input_1">
                </td>
                <td class="col-md-1">
                    <input type="text" id="input_1">
                </td>
                <td class="col-md-2">
                    <input type="text" id="input_1" name="toro_vez_1" value="----">
                </td>
                <td class="col-md-2">
                    <input type="text" id="input_1" name="toro_vez_2" value="----">
                </td>
                <td class="col-md-1">
                    <input type="text" id="input_1" name="toro_vez_3" value="----">
                </td>
                <td class="col-md-1">
                    <input type="text" id="input_1" name="toro_M_N" value="----">
                </td>
                <td class="col-md-1 no-padding">
                    R <input type="text" id="input_5" name="resultado_palpacion_1" value="----">
                </td>
                <td class="col-md-1 no-padding">
                    R <input type="text" id="input_5" name="resultado_palpacion_2" value="----">
                </td>
                <td class="col-md-1 no-padding">
                    R <input type="text" id="input_5" name="resultado_palpacion_3" value="----">
                </td>
            </tr>
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
                        <label for="tipo">Tipo</label>
                        <label class="radio-inline">
                            <input type="radio" name="tipo" id="tipo1" value="1"> M.N.
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="tipo" id="tipo2" value="2"> I.A.
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" id="fecha" placeholder="Fecha en que se realiza el procedimiento">
                    </div>
                    <div class="form-group">
                        <label for="toro">Toro</label>
                        <input type="number" class="form-control" id="toro" placeholder="Código del toro escogido para el procedimiento">
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="b" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-ok">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>