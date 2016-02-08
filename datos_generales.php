<div class="col-sm-8">
    <table class="table table-hover col-sm-8" id="datos_generales">
        <tr>
            <td class="col-sm-3"><strong>Número</strong></td>
            <td class="col-sm-9 res"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Nombre</strong></td>
            <td class="col-sm-9 res"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Reg</strong></td>
            <td class="col-sm-9 res"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Fecha de nacimiento</strong></td>
            <td class="col-sm-9 res"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Padre</strong></td>
            <td class="col-sm-9 res"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Reg No.</strong></td>
            <td class="col-sm-9 res"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Madre</strong></td>
            <td class="col-sm-9 res"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Reg</strong></td>
            <td class="col-sm-9 res"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Clasificación</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_1" name="poner_nombres" value="----"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Peso ajust. 205 días</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_2" name="poner_nombres" value="----"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Altura sacro (Destete)</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_3" name="poner_nombres" value="----"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Peso ajust. 18 meses</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_4" name="poner_nombres" value="----"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Fecha entrada a Toro</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_5" name="poner_nombres" value="----"></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Peso entrada a Toro</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_6" name="poner_nombres" value="----"></td>
        </tr>
    </table>
    <span class="col-sm-3"><strong>Estado</strong></span>
    <span class="col-sm-9">
        <select style="width: 50%" class="form-control">
            <option>Viva</option>
            <option>Perdida</option>
            <option>Muerta</option>
            <option>Traslado</option>
        </select>
    </span>
</div>
<div class="col-sm-4">
    <div class="row">
        <div class="col-xs-6 col-md-3" style="width: auto;margin-top: 10%">
            <a href="#" class="thumbnail">
                <img src="./imagenes/vaca_pastando.jpg" alt="Foto vaca">
            </a>
        </div>
    </div>
</div>
<div>
    <ul id="cargar_datos_generales" class="col-sm-8 visible-lg visible-md" style="list-style: none; line-height: 2">        
    </ul>
</div>
<script>
    $(document).ready(function () {
        cargarDatosGenerales();
    }
    );
    function cargarDatosGenerales() {
        var vaca = $('#vaca').val();
        if (vaca != "") {
            $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "datos_generales"},
            function (mensaje) {
                var datos = JSON.parse(mensaje);
                $("#datos_generales .res ").each(function (i) {
                    $(this).append(datos[i]);
                });
//                $("#cargar_datos_generales").html(datos);
            });
        } else {
            $("#cargar_datos_generales").html("No existe vaca");
        }
    }
    ;


</script>