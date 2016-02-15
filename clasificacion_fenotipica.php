<h4>Vaca N° <?php echo $_SESSION['vaca'] ?></h4>
<div class="col-sm-8">
    <form>
        <table class="table-bordered interlineado_05" id="clasificacion_fenotipo">

            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Car. Racial</p>
                        <p>Ap General</p>
                        <p>25</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_1" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Esqueleto</p>
                        <p>10</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_2" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Aplomos</p>
                        <p>2</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_3" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-1 texto-vertical" rowspan="6" style="line-height: 2">
                    <p>CAPACIDAD CORPORAL 20 PUNTOS</p>
                </td>                   
                <td class="col-sm-3"><strong>
                        <p>Largo</p>
                        <p>4</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_4" />                
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Amplitud</p>
                        <p>Pecho 2</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_5" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Amplitud</p>
                        <p>Lomo 3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_6" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Amplitud</p>
                        <p>Anca 4</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_7" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Profundidad</p>
                        <p>Toráx 3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_8" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Profundidad</p>
                        <p>Corazón 4</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_9" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Desarrollo</p>
                        <p>9</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_10" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Temperamento</p>
                        <p>5</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_11" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <p>Músculo y grasa</p>
                        <p>6</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_12" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-1 texto-vertical" rowspan="5" style="line-height: 2">
                    <p>SISTEMA MAMARIO</p>
                </td>                   
                <td class="col-sm-3"><strong>
                        <p>Ap. Gral.</p>
                        <p>7</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_13" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>U. Post.</p>
                        <p>3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_14" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>U. Ant.</p>
                        <p>3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_15" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Pesón</p>
                        <p>5</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_16" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3"><strong>
                        <p>Irrig.</p>
                        <p>3</p>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_17" />
                </td>
            </tr>
            <tr>
                <td class="col-sm-3" colspan="2"><strong>
                        <h3><p>TOTAL</p></h3>
                    </strong></td>
                <td class="col-sm-9">
                    <input type="text" id="input_18" />
                </td>
            </tr>

        </table>
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

<script>
    $(document).ready(function () {
        clasificacionFenotipo();
    }
    );
</script>