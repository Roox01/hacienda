function cargarDatosGenerales() {
    var vaca = $('#vaca').val();
    if (vaca != "") {
        $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "datos_generales"},
        function (mensaje) {
            var datos = JSON.parse(mensaje);
            $("#datos_generales input").each(function (i) {
                $(this).attr('value', datos[i]);
            });
        });
    } else {
        $("#cargar_datos_generales").html("No existe vaca");
    };
}
;

function clasificacionFenotipo() {
    var vaca = $('#vaca').val();
    if (vaca != "") {
        $.post("controlador/controlador_vaca.php", {vaca: vaca, opcion: "clasificacion _fenotipo"},
        function (mensaje) {
            var datos = JSON.parse(mensaje);
            console.log(datos);
            $("#clasificacion_fenotipo input").each(function (i) {
                console.log(i);
                $(this).attr('value', datos[i]);
            });
        });
    } else {
        $("#clasificacion_fenotipo").html("No existe vaca");
    };
}
;

