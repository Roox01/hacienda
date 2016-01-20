

<?php

class vaca {

    var $numero;
    var $nombre;
    var $registro;
    var $fecha_nacimiento;
    var $padre_numero;
    var $padre_registro;
    var $madre_numero;
    var $madre_registro;
    var $clasificacion;
    var $peso_205dias;
    var $altura_sacro_destete;
    var $peso_18meses;
    var $fecha_entrada_toro;
    var $peso_entrada_toro;
    var $foto;

    function __construct($datos) {
        $this->numero = $datos[0];
        $this->nombre = $datos[1];
        $this->registro = $datos[2];
        $this->fecha_nacimiento = $datos[3];
        $this->padre_numero = $datos[4];
        $this->padre_registro = $datos[5];
        $this->madre_numero = $datos[6];
        $this->madre_registro = $datos[7];
        $this->clasificacion = $datos[8];
        $this->peso_205dias = $datos[9];
        $this->altura_sacro_destete = $datos[10];
        $this->peso_18meses = $datos[11];
        $this->fecha_entrada_toro = $datos[12];
        $this->peso_entrada_toro = $datos[13];
    }

    function datos_generales_desktop() {
        $mensaje ='<li>
        <span class="col-sm-3"><strong>Nombre</strong></span>
        <span class="col-sm-9">' . $this->nombre . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Número</strong></span>
        <span class="col-sm-9">' . $this->numero . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg</strong></span>
        <span class="col-sm-9">' . $this->registro . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Fecha de nacimiento</strong></span>
        <span class="col-sm-9">' . $this->fecha_nacimiento . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Padre</strong></span>
        <span class="col-sm-9">' . $this->padre_numero . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg No.</strong></span>
        <span class="col-sm-9">' . $this->padre_registro . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Madre</strong></span>
        <span class="col-sm-9">' . $this->madre_numero . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg</strong></span>
        <span class="col-sm-9">' . $this->madre_registro . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Clasificación</strong></span>
        <span class="col-sm-9">' . $this->clasificacion . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso ajust. 205 días</strong></span>
        <span class="col-sm-9">' . $this->peso_205dias . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Altura sacro (Destete)</strong></span>
        <span class="col-sm-9">' . $this->altura_sacro_destete . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso ajust. 18 meses</strong></span>
        <span class="col-sm-9">' . $this->peso_18meses . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Fecha entrada a Toro</strong></span>
        <span class="col-sm-9">' . $this->fecha_entrada_toro . '</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso entrada a Toro</strong></span>
        <span class="col-sm-9">' . $this->peso_entrada_toro . '</span>
    </li>';

        return $mensaje;
    }

}
?>