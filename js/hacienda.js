/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function cargar_inventario() {
    var hacienda = $('#hacienda').val();
    console.log(hacienda);
    if (hacienda != "") {
        $.post("controlador/controlador_hacienda.php", {hacienda: hacienda, opcion: "cargar_inventario"},
        function (mensaje) {
            $('#inventario_hacienda tbody').html(mensaje);
        });
    } else {
        alert("No existen vacas");
    }
}

function cargar_historial() {
    var vaca = $('#codigoVaca').val();
    var hacienda = $('#hacienda').val();
    if (vaca != "") {
        $.post("controlador/controlador_hacienda.php", {hacienda: hacienda, vaca: vaca, opcion: "cargar_historial"},
        function (mensaje) {
            $('#inventario_hacienda').hide();
            $('#historial tbody ').html(mensaje);
            $('#historial').show();

        });
    } else {
        $('#historial tbody ').html('');
        $('#historial').hide();
        $('#inventario_hacienda').show();

    }

}

function historial_fecha() {
    var fecha = $('#fecha').val();
    var hacienda = $('#hacienda').val();
    if (fecha != "") {
        $.post("controlador/controlador_hacienda.php", {hacienda: hacienda, fecha:fecha, opcion: "historial_fecha"},
        function (mensaje) {
            $('#inventario_hacienda').hide();
            $('#historial tbody ').html(mensaje);
            $('#historial').show();

        });
    } else {
        $('#historial').hide();
        $('#inventario_hacienda').show();

    }

}
