function cargar_haciendas() {
    $.post("controlador/controlador_hacienda.php", {opcion: "haciendas"},
    function (mensaje) {
        $('#hacienda').append(mensaje);
    });
}

function cargarDatosGenerales() {
    var vaca = $('#vaca').val();
    if (vaca != "") {
        $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "datos_generales"},
        function (mensaje) {
//            console.log('mensaje');
            var datos = JSON.parse(mensaje);
//            console.log(datos);
            $("#datos_generales input").each(function (i) {
                $(this).attr('value', datos[i]);
            });
        });
    } else {
        alert("No existe vaca");
    }

}
;

function clasificacionFenotipo() {
    var vaca = $('#vaca').val();
    if (vaca != "") {
        $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "clasificacion_fenotipo"},
        function (mensaje) {
//            console.log('mensaje');
            var datos = JSON.parse(mensaje);
//            console.log(datos);
            $("#clasificacion_fenotipo input").each(function (i) {
                $(this).attr('value', datos[i]);
            });
        });
    } else {
        alert("No existe vaca");
    }
}
;

function cargarCrias() {
    var vaca = $('#vaca').val();
    if (vaca != "") {
        $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "cargar_crias"},
        function (mensaje) {
            $('#cargar_crias tbody').append(mensaje);
        });
    } else {
        alert("No existe vaca");
    }
}
;


function registrar_vaca() {

    var nombre = $('#nombre').val();
    var numero = $('#numero').val();
    var registro = $('#registro').val();
    var nacimiento = $('#nacimiento').val();
//    console.log(nacimiento);
    var padre = $('#padre').val();
    var reg_padre = $('#reg_padre').val();
    var madre = $('#madre').val();
    var reg_madre = $('#reg_madre').val();
    var clasificacion = $('#clasificacion').val();
    var peso_205 = $('#peso_205').val();
    var alt_sacro = $('#alt_sacro').val();
    var peso_18 = $('#peso_18').val();
    var fecha_toro = $('#fecha_toro').val();
    var peso_toro = $('#peso_toro').val();

    if (nombre != '' && numero != '' && registro != '' && nacimiento != '' && padre != '' && reg_padre != '' && madre != '' && reg_madre != '' && clasificacion != '') {
        $.post("controlador/controlador_vaca.php", {nombre: nombre, numero: numero, registro: registro, nacimiento: nacimiento,
            padre: padre, reg_padre: reg_padre, madre: madre, reg_madre: reg_madre, clasificacion: clasificacion, peso_205: peso_205,
            alt_sacro: alt_sacro, peso_18: peso_18, fecha_toro: fecha_toro, peso_toro: peso_toro, opcion: "registrar"},
        function (mensaje) {
//            console.log(mensaje);
            $('#resultados').html(mensaje);
        });
    }
    else {
        alert('Favor registrar todos los campos requeridos');
    }
}

function registrar_cria() {
    var madre = $('#madre').val();
    var numero = $('#numero').val();
    var padre = $('#padre').val();
    var nacimiento = $('#nacimiento').val();
    var sexo = $('input[name="sexo"]:checked').val();
    var peso_nacimiento = $('#peso_nacimiento').val();
    console.log(peso_nacimiento);
    var inter_parto = $('#inter_parto').val();
    var observaciones = $('#observaciones').val();
    var fecha_destete = $('#fecha_destete').val();
    var peso_destete = $('#peso_destete').val();
    var peso_205dias = $('#peso_205dias').val();
    var indice1 = $('#indice1').val();
    var peso_18meses = $('#peso_18meses').val();
    var indice2 = $('#indice2').val();


    if (madre != '' && numero != '' && padre != '' && nacimiento != '' && sexo != '') {
        $.post("controlador/controlador_vaca.php", {madre: madre, numero: numero, padre: padre, nacimiento: nacimiento, peso_nacimiento: peso_nacimiento, inter_parto: inter_parto, sexo: sexo, observaciones: observaciones,
            fecha_destete: fecha_destete, peso_destete: peso_destete, peso_205dias: peso_205dias, indice1: indice1, peso_18meses: peso_18meses, indice2: indice2, opcion: "registrar_cria"},
        function (mensaje) {
//            console.log(mensaje);
            $('#res2').html(mensaje);
        });
    }
    else {
        alert('Favor registrar todos los campos requeridos');
    }
}

function editar_cria(clave, numero_cria) {

    var x = '#' + clave + numero_cria;
    var valor = $(x).val();
//    console.log(x);
//    console.log(valor);

    if (valor !== '') {
        $.post("controlador/controlador_vaca.php", {valor: valor, clave: clave, numero_cria: numero_cria, opcion: "editar_cria"},
        function (mensaje) {
            $('#crias').html(mensaje);
            alert(mensaje);
        });
    }
    else {
        $(x).focus();
        $('#crias').html('Favor diligenciar el campo');
        alert('Favor diligenciar el campo');
    }
}

function editar(clave, valor, vaca, opcion) {
    if (valor !== '') {
        $.post("controlador/controlador_vaca.php", {valor: valor, clave: clave, vaca: vaca, opcion: opcion},
        function (mensaje) {
            $('#res').html(mensaje);
            alert(mensaje);
        });
    }
    else {
        $(this).focus();
        $('#res').html('Favor diligenciar el campo');
        alert('Favor diligenciar el campo');
    }
}

function cargar_reproduccion() {
    var vaca = $('#vaca').val();
    if (vaca != "") {
        $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "cargar_reproduccion"},
        function (mensaje) {
            $('#datos_reproduccion tbody').append(mensaje);
        });
    } else {
        alert("No existe vaca");
    }
}

function editar_reproduccion(clave, id) {
    var x = '#' + clave + id;
    var valor = $(x).val();
    console.log(valor);
    if (valor !== '') {
        $.post("controlador/controlador_vaca.php", {valor: valor, clave: clave, id: id, opcion: "editar_reproduccion"},
        function (mensaje) {
            $('#res_reproduccion').html(mensaje);
            alert(mensaje);
        });
    }
    else {
        $(x).focus();
        $('#crias').html('Favor diligenciar el campo');
        alert('Favor diligenciar el campo');
    }
}

function registrar_programa() {
    var fecha = $('#fecha_programar').val();
    var vaca = $('#vaca').val();
    console.log(fecha);
    if (fecha!=='') {
        $.post("controlador/controlador_vaca.php", {fecha:fecha,vaca:vaca, opcion: "registrar_reproduccion"},
        function (mensaje) {
            $('#res_reproduccion').html(mensaje);
        });
    }
    else {
        alert('Favor registrar todos los campos requeridos');
    }

}


