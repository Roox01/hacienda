<div class="col-sm-8">
    <form>
        <table class="table-bordered interlineado_05" id="clasificacion_fenotipo">

            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Car. Racial</p>
                        <p>Ap General</p>
                        <p>25</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="car_racial_ap_general" maxlength="15" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Esqueleto</p>
                        <p>10</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="esqueleto" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Aplomos</p>
                        <p>2</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="aplomos" maxlength="15" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-1 texto-vertical" rowspan="6" style="line-height: 2">
                    <p>CAPACIDAD CORPORAL 20 PUNTOS</p>
                </td>                   
                <td class="col-sm-3"><strong>
                        <p>Largo</p>
                        <p>4</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="largo" maxlength="15"/>                
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Amplitud</p>
                        <p>Pecho 2</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="amplitud_pecho" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Amplitud</p>
                        <p>Lomo 3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="amplitud_lomo" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Amplitud</p>
                        <p>Anca 4</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="amplitud_anca" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Profundidad</p>
                        <p>Toráx 3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="profundidad_torax" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Profundidad</p>
                        <p>Calzón 4</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="profundidad_calzon" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Desarrollo</p>
                        <p>9</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="desarrollo" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Temperamento</p>
                        <p>5</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="temperamento" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Músculo y grasa</p>
                        <p>6</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="musculo_grasa" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-1 texto-vertical" rowspan="5" style="line-height: 2">
                    <p>SISTEMA MAMARIO</p>
                </td>                   
                <td class="col-sm-3"><strong>
                        <p>Ap. Gral.</p>
                        <p>7</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="ap_general" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>U. Post.</p>
                        <p>3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="u_post" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>U. Ant.</p>
                        <p>3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="u_ant" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Pezón</p>
                        <p>5</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="pezon" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Irrig.</p>
                        <p>3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="irrig" maxlength="15"/>
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <h3><p>TOTAL</p></h3>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="total" maxlength="15"/>
                </td>
            </tr>

        </table>
    </form>
</div>

<div class="col-sm-4">
    <div class="row">
        <div class="col-xs-6 col-md-3" style="width: auto;margin-top: 10%">
            <a href="#" class="thumbnail">
                <img src="./imagenes/vaca_pastando.jpg" alt="Foto vaca">
            </a>
        </div>
    </div>
    <div id="res"></div>
</div>

<script>
    $(document).ready(function () {
        clasificacionFenotipo();
    });

    $('#clasificacion_fenotipo input').blur(function () {                
            var clave = $(this).attr('id');
            var valor = $(this).val();
            var codigoVaca=<?php echo $_SESSION['vaca'];?>;
            console.log(clave+": "+valor);
            editar(clave,valor,codigoVaca,'editar_fenotipo');
    });
</script>