<h2>Registro de animal - Adulto</h2>

<form class="form-horizontal" id="form_registrar_vaca">
    <div class="form-group">
        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre del animal" required>
        </div>
    </div>
    <div class="form-group">
        <label for="numero" class="col-sm-2 control-label">Número</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="numero" placeholder="Número del animal" required>
        </div>
    </div>
    <div class="form-group">
        <label for="reg" class="col-sm-2 control-label">Reg</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="registro" placeholder="Reg del animal" required>
        </div>
    </div>
    <div class="form-group">
        <label for="nacimiento" class="col-sm-2 control-label">Fecha de nacimiento</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="nacimiento" placeholder="Fecha de nacimiento del animal" required>
        </div>
    </div>
    <div class="form-group">
        <label for="padre" class="col-sm-2 control-label">Padre</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="padre" placeholder="Padre del animal" required> 
        </div>
    </div>
    <div class="form-group">
        <label for="reg_no" class="col-sm-2 control-label">Reg. N°</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="reg_padre" placeholder="Registro no del padre" required>
        </div>
    </div>
    <div class="form-group">
        <label for="madre" class="col-sm-2 control-label">Madre</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="madre" placeholder="Madre del animal" required>
        </div>
    </div>
    <div class="form-group">
        <label for="reg2" class="col-sm-2 control-label">Reg</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="reg_madre" placeholder="Registro no de la madre" required>
        </div>
    </div>
    <div class="form-group">
        <label for="clasificacion" class="col-sm-2 control-label">Clasificación</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="clasificacion" placeholder="Clasificación del animal" required>
        </div>
    </div>
    <div class="form-group">
        <label for="peso_205" class="col-sm-2 control-label">Peso ajust. 205 días</label>
        <div class="col-sm-10">
            <div class="input-group">                
                <input type="number" class="form-control" placeholder="Peso 205 del animal" id="peso_205" aria-describedby="sizing-addon2">
                <span class="input-group-addon" id="sizing-addon2">kg</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="alt_sacro" class="col-sm-2 control-label">Altura sacro</label>
        <div class="col-sm-10">
            <div class="input-group">                
                <input type="number" class="form-control" placeholder="Alt. Sacro del animal" id="alt_sacro" aria-describedby="sizing-addon2">
                <span class="input-group-addon" id="sizing-addon2">cm</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="peso_18" class="col-sm-2 control-label">Peso ajust. 18 meses</label>
        <div class="col-sm-10">
            <div class="input-group">                
                <input type="number" class="form-control" placeholder="Peso 18 meses del animal" id="peso_18" aria-describedby="sizing-addon2">
                <span class="input-group-addon" id="sizing-addon2">kg</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="fecha_toro" class="col-sm-2 control-label">Fecha de entrada a Toro</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="fecha_toro" placeholder="Fecha de entrada del animal">
        </div>
    </div>
    <div class="form-group">
        <label for="peso_toro" class="col-sm-2 control-label">Peso de entrada a Toro</label>
        <div class="col-sm-10">
            <div class="input-group">                
                <input type="number" class="form-control" placeholder="Peso e entrada del animal" id="peso_toro" aria-describedby="sizing-addon2">
                <span class="input-group-addon" id="sizing-addon2">kg</span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-ok" id="registrar_vaca" onclick="registrar_vaca();">Registrar</a>
            <a class="btn btn-default">Borrar</a>
        </div>
    </div>
</form>

<div id="resultados"></div>

