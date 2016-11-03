<h2>Traslado de vaca</h2>

<form class="form-horizontal" id="form_registrar_hacienda">
    <div class="form-group">
        <label for="vaca" class="col-sm-2 control-label">Vaca</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="vaca" placeholder="código de la vaca" maxlength="50" required>
        </div>
    </div>
    <div class="form-group">
        <label for="hacienda" class="col-sm-2 control-label">Nueva hacienda</label>
        <div class="col-sm-10">
            <select id="hacienda1" name="hacienda1" class="form-control">
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-ok" id="registrar_hacienda" onclick="traslado_de_vaca();">Realizar traslado</a>
            <a class="btn btn-default">Borrar</a>
        </div>
    </div>
</form>
<div id="res1"></div>