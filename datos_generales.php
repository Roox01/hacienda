<div class="col-sm-8">
    <form>
        <table class="table col-sm-8" id="datos_generales">
            <tr>
                <td class="col-sm-3"><strong>Número</strong></td>
                <td class="col-sm-9 res"><input type="text" id="input_0" disabled></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Nombre</strong></td>
                <td class="col-sm-9 res"><input type="text" id="input_1" disabled></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Reg</strong></td>
                <td class="col-sm-9 res"><input type="text" id="input_2" disabled></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Fecha de nacimiento</strong></td>
                <td class="col-sm-9 res"><input type="text" id="input_3" disabled></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Padre</strong></td>
                <td class="col-sm-9 res"><input type="text" id="input_4" disabled></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Reg No.</strong></td>
                <td class="col-sm-9 res"><input type="text" id="input_5" disabled></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Madre</strong></td>
                <td class="col-sm-9 res"><input type="text" id="input_6" disabled></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Reg</strong></td>
                <td class="col-sm-9 res"><input type="text" id="input_7" disabled></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Clasificación</strong></td>
                <td class="col-sm-9 res"><input type="text" id="clasificacion" maxlength="30" onblur="editar_vaca('#clasificacion');"></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Peso ajust. 205 días</strong></td>
                <td class="col-sm-9 res"><input type="number" id="peso_205dias" maxlength="5" onblur="editar_vaca('#peso_205dias');"></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Altura sacro (Destete)</strong></td>
                <td class="col-sm-9 res"><input type="number" id="altura_sacro_destete" maxlength="5" onblur="editar_vaca('#altura_sacro_destete');"></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Peso ajust. 18 meses</strong></td>
                <td class="col-sm-9 res"><input type="number" id="peso_18meses" maxlength="5" onblur="editar_vaca('#peso_18meses');"></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Fecha entrada a Toro</strong></td>
                <td class="col-sm-9 res"><input type="date" id="fecha_entrada_toro" onblur="editar_vaca('#fecha_entrada_toro');"></td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>Peso entrada a Toro</strong></td>
                <td class="col-sm-9 res"><input type="number" id="peso_entrada_toro" maxlength="5" onblur="editar_vaca('#peso_entrada_toro');"></td>
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
        <div>
            <form>
                <div class="form-group">
                    <span style=" padding-right: 0;padding-left: 0" class="col-sm-3"><strong>Estado</strong></span>
                    <span class="col-sm-9" style=" padding-right: 0;padding-left: 0">
                        <select id="estado" style="width: 100%" class="form-control">
                            <option>Viva</option>
                            <option>Perdida</option>
                            <option>Muerta</option>
                            <option>Traslado</option>
                        </select>
                    </span>
                </div>
                <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <textarea type="text" class="form-control" id="observaciones" rows="5" placeholder=""></textarea>
                </div>
                <a id="actualizar" class="btn btn-ok" onclick="actualizar_inventario();">Actualizar en inventario</a>
                <div id="inv"></div>
            </form>
        </div>
    </div>
</div>
<div>
    <ul id="cargar_datos_generales" class="col-sm-8 visible-lg visible-md" style="list-style: none; line-height: 2">        
    </ul>
</div>
<div id="res"></div>
<script>
    $(document).ready(function () {
        cargarDatosGenerales();
    });

    function editar_vaca(item) {
        var clave = $(item).attr('id');
        var valor = $(item).val();
        var codigoVaca =<?php echo $_SESSION['vaca']; ?>;
        console.log(clave + ": " + valor);
        editar(clave, valor, codigoVaca, 'editar_vaca');
    }


</script>
