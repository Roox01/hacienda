<h2>Registro de usuario</h2>

<form class="form-horizontal" id="form_registrar_hacienda">
    <div class="form-group">
        <label for="nombre" class="col-sm-2 control-label">Nombre de usuario</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre de usuario" maxlength="50" required>
        </div>
    </div>
    <div class="form-group">
        <label for="contraseña" class="col-sm-2 control-label">Contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="contraseña" placeholder="contraseña" maxlength="80" required>
        </div>
    </div>
    <div class="form-group">
        <label for="hacienda" class="col-sm-2 control-label">Hacienda</label>
        <div class="col-sm-10">
            <select id="hacienda2" name="hacienda2" class="form-control">
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-ok" id="registrar_hacienda" onclick="registrar_usuario();">Registrar</a>
            <a class="btn btn-default">Borrar</a>
        </div>
    </div>
</form>
<div id="res1"></div>

