function cargarDatosGenerales() {
    var vaca = $('#vaca').val();
    if (vaca != "") {
        $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "datos_generales"},
        function (mensaje) {
            console.log('mensaje');
            var datos = JSON.parse(mensaje);
            console.log(datos);
            $("#datos_generales input").each(function (i) {
                $(this).attr('value', datos[i]);
            });
        });
    } else {
        alert("No existe vaca");
    }
    
};

function clasificacionFenotipo() {
    var vaca = $('#vaca').val();
    if (vaca != "") {
        $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "clasificacion_fenotipo"},
        function (mensaje) {
            console.log('mensaje');
            var datos = JSON.parse(mensaje);
            console.log(datos);
            $("#clasificacion_fenotipo input").each(function (i) {
                $(this).attr('value', datos[i]);
            });
        });
    } else {
        alert("No existe vaca");
    }
};

function cargarCrias() {
    var vaca = $('#vaca').val();
    if (vaca != "") {
        $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "cargar_crias"},
        function (mensaje) {
            console.log('mensaje');
            var datos = JSON.parse(mensaje);
            console.log(datos);
            $("#cargar_crias input").each(function (i) {
                $(this).attr('value', datos[i]);
            });
        });
    } else {
        alert("No existe vaca");
    }
};

function registrar_vaca(){
    
    var nombre=$('#form_registrar_vaca #nombre').val();
    var numero=$('#numero').val();
    var registro=$('#registro').val();
    var nacimiento=$('#nacimiento').val();
//    console.log(nacimiento.replace(/-/g, '/'));
    var padre=$('#padre').val();
    var reg_padre=$('#reg_padre').val();
    var madre=$('#madre').val();
    var reg_madre=$('#reg_madre').val();
    var clasificacion=$('#clasificacion').val();
    var peso_205=$('#peso_205').val();
    var alt_sacro=$('#alt_sacro').val();
    var peso_18=$('#peso_18').val();
    var fecha_toro=$('#fecha_toro').val();
    var peso_toro=$('#peso_toro').val();
    
    if(nombre!='' && numero!='' && registro!='' && nacimiento!='' && padre!='' && reg_padre!='' && madre!='' && reg_madre!='' && clasificacion!=''){
        $.post("controlador/controlador_vaca.php", {nombre: nombre, numero: numero, registro:registro, nacimiento:nacimiento,
            padre:padre, reg_padre:reg_padre, madre:madre, reg_madre:reg_madre, clasificacion:clasificacion, peso_205:peso_205,
            alt_sacro:alt_sacro, peso_18:peso_18, fecha_toro:fecha_toro, peso_toro:peso_toro, opcion: "registrar"},
                function (mensaje) {
                    console.log(mensaje);
                    $('#resultados').html(mensaje);
                    
//                    $('input').val('');
                });        
    }
    else{
        alert('Favor registrar todos los campos requeridos');
    }
}
