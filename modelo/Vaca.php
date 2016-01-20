<?php

class Vaca {

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

    function crear($datos) {
        $this->numero = $datos['numero'];
        $this->nombre = $datos['nombre'];
        $this->registro = $datos['registro'];
        $this->fecha_nacimiento = $datos['fecha_nacimiento'];
        $this->padre_numero = $datos['padre_numero'];
        $this->padre_registro = $datos['padre_registro'];
        $this->madre_numero = $datos['madre_numero'];
        $this->madre_registro = $datos['madre_registro'];
        $this->clasificacion = $datos['clasificacion'];
        $this->peso_205dias = $datos['peso_205dias'];
        $this->altura_sacro_destete = $datos['altura_sacro_destete'];
        $this->peso_18meses = $datos['peso_18meses'];
        $this->fecha_entrada_toro = $datos['fecha_entrada_toro'];
        $this->peso_entrada_toro = $datos['peso_entrada_toro'];
        $this->foto = $datos['foto'];
    }

    function datos_generales_desktop() {
        echo '<li>
        <span class="col-sm-3"><strong>'.$this->numero.'</strong></span>
        <span class="col-sm-9">Josefa</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Número</strong></span>
        <span class="col-sm-9">44</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg</strong></span>
        <span class="col-sm-9">-----</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Fecha de nacimiento</strong></span>
        <span class="col-sm-9">10/Sep/2015</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Padre</strong></span>
        <span class="col-sm-9">568</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg No.</strong></span>
        <span class="col-sm-9">------</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Madre</strong></span>
        <span class="col-sm-9">789</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg</strong></span>
        <span class="col-sm-9">-------</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Calsificación</strong></span>
        <span class="col-sm-9">Br. Cial</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso ajust. 205 días</strong></span>
        <span class="col-sm-9">158 kg</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Altura sacro (Destete)</strong></span>
        <span class="col-sm-9">50cm</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso ajust. 18 meses</strong></span>
        <span class="col-sm-9">250kg</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Fecha entrada a Toro</strong></span>
        <span class="col-sm-9">?????????</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso entrada a Toro</strong></span>
        <span class="col-sm-9">?????????</span>
    </li>';
    }

    function datos_generales_mobile() {
        
    }

}

?>
