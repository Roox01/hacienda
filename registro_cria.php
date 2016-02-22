<h2>Registro de animal - Cría</h2>

<form class="form-horizontal">
    <div class="form-group">
        <label for="madre" class="col-sm-2 control-label">Madre</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="madre" placeholder="Madre del animal" maxlength="15">
        </div>
    </div> 
    <div class="form-group">
        <label for="padre" class="col-sm-2 control-label">Padre</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="padre" placeholder="Padre del animal"  maxlength="15">
        </div>
    </div>
    <div class="form-group">
        <label for="numero" class="col-sm-2 control-label">Número de la cría</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="numero" placeholder="Número del animal"  maxlength="15">
        </div>
    </div> 
    <div class="form-group">
        <label for="nacimiento" class="col-sm-2 control-label">Fecha de nacimiento</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="nacimiento" placeholder="Fecha de nacimiento del animal">
        </div>
    </div>
    <div class="form-group">
        <label for="peso_nacimiento" class="col-sm-2 control-label">Peso de nacimiento</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="peso_nacimiento" placeholder="Peso de nacimiento de la cria"  maxlength="5">
        </div>
    </div>
    <div class="form-group">
        <label for="sexo" class="col-sm-2 control-label">Sexo</label>
        <div class="col-sm-10">
            <div class="radio-inline">
                <label>
                    <input type="radio" name="sexo" id="masculino" value="masculino" checked>
                    M
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="sexo" id="femenino" value="femenino">
                    F
                </label>
            </div>            
        </div>
    </div>
    <div class="form-group">
        <label for="inter_parto" class="col-sm-2 control-label">Inter. Parto</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inter_parto" placeholder="Inter. Parto"  maxlength="30">
        </div>
    </div>
    <div class="form-group">
        <label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="observaciones" placeholder="Observaciones" maxlength="50">
        </div>
    </div>
    <div class="form-group">
        <label for="fecha_destete" class="col-sm-2 control-label">Fecha del destete</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="fecha_destete" placeholder="Fecha del destete">
        </div>
    </div>
    <div class="form-group">
        <label for="peso_destete" class="col-sm-2 control-label">Peso del destete</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="peso_destete" placeholder="Peso del destete" maxlength="5">
        </div>
    </div>
    <div class="form-group">
        <label for="peso_205dias" class="col-sm-2 control-label">Peso ajus. 205 dias</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="peso_205dias" placeholder="Peso ajus. 205 dias" maxlength="5">
        </div>
    </div>
    <div class="form-group">
        <label for="indice1" class="col-sm-2 control-label">Índice 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="indice1" placeholder="Índice 1" maxlength="30">
        </div>
    </div>
    <div class="form-group">
        <label for="peso_18meses" class="col-sm-2 control-label">Peso ajus. 18 meses</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="peso_18meses" placeholder="Peso ajus. 18 meses" maxlength="5">
        </div>
    </div>
    <div class="form-group">
        <label for="indice2" class="col-sm-2 control-label">Índice 2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="indice2" placeholder="Índice 2" maxlength="30">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-ok" id="registrar_cria" onclick="registrar_cria();">Registrar</a>
            <a class="btn btn-default">Borrar</a>
        </div>
    </div>
</form>
<div id="res2"></div>
    