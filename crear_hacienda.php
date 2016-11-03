<h2>Registro de hacienda</h2>

<form class="form-horizontal" id="form_registrar_hacienda">
    <div class="form-group">
        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre de la hacienda" maxlength="50" required>
        </div>
    </div>
    <div class="form-group">
        <label for="direccion" class="col-sm-2 control-label">Dirección</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="direccion" placeholder="direccion" maxlength="80" required>
        </div>
    </div>
    <div class="form-group">
        <label for="telefono" class="col-sm-2 control-label">Telefono</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="telefono" placeholder="telefono" maxlength="15" required>
        </div>
    </div>
    <div class="form-group">
        <label for="persona" class="col-sm-2 control-label">Persona encargada</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="persona" placeholder="persona" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-ok" id="registrar_hacienda" onclick="registrar_hacienda();">Registrar</a>
            <a class="btn btn-default">Borrar</a>
        </div>
    </div>
</form>
<div id="res1"></div>