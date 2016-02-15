<h4>Vaca N° <?php echo $_SESSION['vaca'] ?></h4>
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
            <td class="col-sm-9 res"><input type="text" id="input_8" ></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Peso ajust. 205 días</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_9" ></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Altura sacro (Destete)</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_10" ></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Peso ajust. 18 meses</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_11" ></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Fecha entrada a Toro</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_12" ></td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Peso entrada a Toro</strong></td>
            <td class="col-sm-9 res"><input type="text" id="input_13" ></td>
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
</script>
