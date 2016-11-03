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
            $('#div_inventario_hacienda').html(mensaje);
            acomodarTabla('inventario_hacienda');
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
            $('#div_historial').html(mensaje);
            acomodarTabla('historial');
//            $('#div_inventario_hacienda').hide();
//            $('#div_historial').show();
        });
    } else {
        $('#div_historial').html('');
//        $('#div_historial').hide();
//        $('#div_inventario_hacienda').show();
    }

}

function historial_fecha() {
    var fecha = $('#fecha').val();
    var hacienda = $('#hacienda').val();
    if (fecha != "") {
        $.post("controlador/controlador_hacienda.php", {hacienda: hacienda, fecha: fecha, opcion: "historial_fecha"},
        function (mensaje) {
            $('#div_historial').html(mensaje);
            acomodarTabla('historial');
//            $('#div_inventario_hacienda').hide();            
//            $('#div_historial').show();
        });
    } else {
        $('#div_historial').html('');
//        $('#div_inventario_hacienda').show();
//        $('#div_historial').hide();
    }
}

function registrar_hacienda() {
    var nombre = $('#nombre').val();
    var direccion = $('#direccion').val();
    var telefono = $('#telefono').val();
    var persona = $('#persona').val();
    if (nombre !== '') {
        $.post("controlador/controlador_hacienda.php", {nombre: nombre, direccion: direccion, telefono: telefono, persona: persona, opcion: "registrar_hacienda"},
        function (mensaje) {
            $('#res1').html(mensaje);
        });
    }
    else {
        $('#res1').html('favor digite el nombre de la hacienda');
        $('#nombre').focus();
    }
}

function registrar_usuario() {
    var nombre = $('#nombre').val();
    var password = $('#contraseña').val();
    var hacienda = $('#hacienda').val();
    if (nombre !== '' && password !== '' && hacienda !== '') {
        $.post("controlador/controlador_hacienda.php", {nombre: nombre, password: password, hacienda: hacienda, opcion: "registrar_usuario"},
        function (mensaje) {
            $('#res1').html(mensaje);
        });
    }
    else {
        $('#res1').html('favor digite los campos vacìos');
    }
}

function traslado_de_vaca(){
    var vaca=$('#vaca').val();
    var haciendaAct=$('#hacienda').val();
    var haciendaDestino=$('#hacienda1').val();
//    console.log(haciendaAct, haciendaDestino);
    if(vaca!==''){
        $.post("controlador/controlador_hacienda.php", {vaca:vaca, haciendaDestino: haciendaDestino, haciendaAct:haciendaAct, opcion: "traslado"},
        function (mensaje) {
            $('#res1').html(mensaje);
        });
    }else{
        $('#res1').html('favor digite el nombre de la hacienda');
        $('#nombre').focus();
    }
}


function acomodarTabla(tabla) {
    $('#' + tabla).DataTable({
        responsive: true,
        order: [[4, "desc"]],
        language: {
            processing: "Procesando",
            lengthMenu: "Mostrar _MENU_ registros por página",
            zeroRecords: "Registros no encontrados",
            info: "Mostrar página _PAGE_ de _PAGES_",
            infoEmpty: "No hay registros disponibles",
            infoFiltered: "(Búsqueda realizada en _MAX_ registros)",
            search: "Buscar",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            },
            oAria: {
                sortAscending: ": Activar para ordenar la columna de manera ascendente",
                sortDescending: ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
}