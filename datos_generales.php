<h4>Vaca N° 1234</h4>
<ul class="col-sm-8 visible-lg visible-md" style="list-style: none; line-height: 2">
    <li>
        <span class="col-sm-3"><strong>Nombre</strong></span>
        <span class="col-sm-9">Josefa</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Número</strong></span>
        <span class="col-sm-9">44</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg</strong></span>
        <span class="col-sm-9">-----</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Fecha de nacimiento</strong></span>
        <span class="col-sm-9">10/Sep/2015</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Padre</strong></span>
        <span class="col-sm-9">568</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg No.</strong></span>
        <span class="col-sm-9">------</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Madre</strong></span>
        <span class="col-sm-9">789</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg</strong></span>
        <span class="col-sm-9">-------</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Calsificación</strong></span>
        <span class="col-sm-9">Br. Cial</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso ajust. 205 días</strong></span>
        <span class="col-sm-9">158 kg</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Altura sacro (Destete)</strong></span>
        <span class="col-sm-9">50cm</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso ajust. 18 meses</strong></span>
        <span class="col-sm-9">250kg</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Fecha entrada a Toro</strong></span>
        <span class="col-sm-9">?????????</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso entrada a Toro</strong></span>
        <span class="col-sm-9">?????????</span>
    </li>
</ul>
<div class="col-sm-8 visible-sm visible-xs">
    <table class="table table-hover col-sm-8">
        <tr>
            <td class="col-sm-3"><strong>Nombre</strong></td>
            <td class="col-sm-9">Josefa</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Número</strong></td>
            <td class="col-sm-9">44</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Reg</strong></td>
            <td class="col-sm-9">-------</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Fecha de nacimiento</strong></td>
            <td class="col-sm-9">10/Sep/2015</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Padre</strong></td>
            <td class="col-sm-9">568</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Reg No.</strong></td>
            <td class="col-sm-9">------</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Madre</strong></td>
            <td class="col-sm-9">789</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Reg</strong></td>
            <td class="col-sm-9">------</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Clasificación</strong></td>
            <td class="col-sm-9">Br. Cial</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Peso ajust. 205 días</strong></td>
            <td class="col-sm-9">158kg</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Altura sacro (Destete)</strong></td>
            <td class="col-sm-9">50cm</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Peso ajust. 18 meses</strong></td>
            <td class="col-sm-9">250kg</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Fecha entrada a Toro</strong></td>
            <td class="col-sm-9">?????????</td>
        </tr>
        <tr>
            <td class="col-sm-3"><strong>Peso entrada a Toro</strong></td>
            <td class="col-sm-9">?????????</td>
        </tr>
    </table>
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
    function buscarUsuario() {        
        var vaca = <?php echo$_POST['codigoVaca'];?>;
        if (vaca != "") {
            $.post("/controlador/controlador_vaca.php", {valorBusqueda: vaca, opcion: "datos_generales"},
            function (mensaje) {
                $("#cargar_datos_generales").html(mensaje);
            });
        } else {
            $("#datosgenerales").html("No existe vaca");            
        }
    }
    ;


</script>