<h2>Registro de monta</h2>

<div class="col-md-12">
    <div class="col-md-offset-4 col-md-4">
        <div class="col-md-6">
            <p><strong>Nombre</strong></p>
            <p><strong>Código</strong></p>
        </div>
        <div class="col-md-6">
            <p>Josefa</p>
            <p>1234</p>
        </div>
    </div>
    <div class="col-md-4">
        <p style="visibility: hidden">a</p>
    </div>
</div>

<div class="col-md-12" style="
     border-top: 2px black;
     ">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="tipo_monta_1" class="col-sm-2 control-label">Tipo de monta</label>
            <div class="col-sm-10">
                <label class="radio-inline">
                    <input type="radio" name="tipo_monta" id="tipo_monta_1" value="IA"> Inseminación artificial
                </label>
                <label class="radio-inline">
                    <input type="radio" name="tipo_monta" id="tipo_monta_2" value="MN"> Monta Natural
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="fecha_monta" class="col-sm-2 control-label">Fecha de la monta</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="fecha_monta" placeholder="Fecha de la monta">
            </div>
        </div>
        <div class="form-group">
            <label for="toro" class="col-sm-2 control-label">Toro</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="toro" placeholder="Toro que la monta o del que se obtuvo el semen">
            </div>
        </div>
    </form>
</div>
