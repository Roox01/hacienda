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
        $("#cargar_datos_generales").html("No existe vaca");
    }
    
}
;

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
        $("#cargar_datos_generales").html("No existe vaca");
    }
}
;

