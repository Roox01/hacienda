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
        $mensaje= '<li>
        <span class="col-sm-3"><strong>Nombre</strong></span>
        <span class="col-sm-9">'.$this->nombre.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Número</strong></span>
        <span class="col-sm-9">'.$this->numero.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg</strong></span>
        <span class="col-sm-9">'.$this->registro.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Fecha de nacimiento</strong></span>
        <span class="col-sm-9">'.$this->fecha_nacimiento.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Padre</strong></span>
        <span class="col-sm-9">'.$this->padre_numero.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg No.</strong></span>
        <span class="col-sm-9">'.$this->padre_registro.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Madre</strong></span>
        <span class="col-sm-9">'.$this->madre_numero.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Reg</strong></span>
        <span class="col-sm-9">'.$this->madre_registro.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Calsificación</strong></span>
        <span class="col-sm-9">'.$this->clasificacion.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso ajust. 205 días</strong></span>
        <span class="col-sm-9">'.$this->peso_205dias.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Altura sacro (Destete)</strong></span>
        <span class="col-sm-9">'.$this->altura_sacro_destete.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso ajust. 18 meses</strong></span>
        <span class="col-sm-9">'.$this->peso_18meses.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Fecha entrada a Toro</strong></span>
        <span class="col-sm-9">'.$this->fecha_entrada_toro.'</span>
    </li>
    <li>
        <span class="col-sm-3"><strong>Peso entrada a Toro</strong></span>
        <span class="col-sm-9">'.$this->peso_entrada_toro.'</span>
    </li>';
        return $mensaje;
    }

    function datos_generales_mobile() {
        
    }

}

?>
