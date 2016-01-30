<h2>Registro de animal - Cría</h2>

<form class="form-horizontal">
    <div class="form-group">
        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre del animal">
        </div>
    </div>
    <div class="form-group">
        <label for="numero" class="col-sm-2 control-label">Número</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="numero" placeholder="Número del animal">
        </div>
    </div>
    <div class="form-group">
        <label for="sexo" class="col-sm-2 control-label">Sexo</label>
        <div class="col-sm-10">
            <div class="radio-inline">
                <label>
                    <input type="radio" name="sexo" id="sexo1" value="M" checked>
                    M
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="sexo" id="sexo2" value="F">
                    F
                </label>
            </div>            
        </div>
    </div>    
    <div class="form-group">
        <label for="nacimiento" class="col-sm-2 control-label">Fecha de nacimiento</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="nacimiento" placeholder="Fecha de nacimiento del animal">
        </div>
    </div>
    <div class="form-group">
        <label for="peso" class="col-sm-2 control-label">Peso al nacer</label>
        <div class="col-sm-10">
            <div class="input-group">                
                <input type="number" class="form-control" placeholder="Peso del animal al nacer" id="peso" aria-describedby="sizing-addon2">
                <span class="input-group-addon" id="sizing-addon2">kg</span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="padre" class="col-sm-2 control-label">Padre</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="padre" placeholder="Padre del animal">
        </div>
    </div>
    <div class="form-group">
        <label for="reg_no" class="col-sm-2 control-label">Reg. N°</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="reg_no" placeholder="Registro del padre">
        </div>
    </div>
    <div class="form-group">
        <label for="madre" class="col-sm-2 control-label">Madre</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="madre" placeholder="Madre del animal">
        </div>
    </div>
    <div class="form-group">
        <label for="reg2" class="col-sm-2 control-label">Reg. N°</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="reg2" placeholder="Registro de la madre">
        </div>
    </div>
    <div class="form-group">
        <label for="clasificacion" class="col-sm-2 control-label">Observaciones</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="clasificacion" placeholder="Clasificación del animal">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-ok">Registrar</button>
            <button type="reset" class="btn btn-default">Borrar</button>
        </div>
    </div>
</form>