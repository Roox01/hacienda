<div class="form-group col-sm-3">
    <label for="vacas">Historial de actualizaciones por animal</label>
    <input type="text" class="form-control" id="codigoVaca" name="codigoVaca" placeholder="Ver otro animal" onkeyup="cargar_historial();">
</div> 

<div class="form-group col-sm-3">
    <label for="vacas">Fecha de consulta</label>
    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha de consulta"  onchange="historial_fecha();">
</div> 

<table id="inventario_hacienda" class="table col-sm-8">
    <thead>
        <tr>
            <th class="col-sm-1">Número</th>
            <th class="col-sm-2">Nombre</th>            
            <th class="col-sm-3">Estado</th>
            <th class="col-sm-3">Observaciones</th>
            <th class="col-sm-3">Fecha de consulta</th>
        </tr>  
    </thead>
    <tbody></tbody>
</table>

<table id="historial" class="table col-sm-8" style="display:none">
    <thead>
        <tr>
            <th class="col-sm-1">Número</th>
            <th class="col-sm-2">Nombre</th>            
            <th class="col-sm-3">Estado</th>
            <th class="col-sm-3">Observaciones</th>
            <th class="col-sm-3">Fecha de consulta</th>
        </tr>  
    </thead>
    <tbody></tbody>
</table>




<!--<div class="col-sm-12" style="text-align: center">
    <nav>
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>-->
<script>
    $(document).ready(function () {
//        $('#inventario_hacienda').dataTable();
        cargar_inventario();
    });
    
</script>