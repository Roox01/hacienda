<div class="table-responsive">
    <form>
        <table class="table-bordered" style="width: 100%" id="cargar_crias">
            <thead
                <tr style="text-align: center">
                    <td><strong>N° Cría</strong></td>
                    <td><strong>Padre</strong></td>
                    <td><strong>Fecha parto</strong></td>
                    <td><strong>Sexo</strong></td>
                    <td><strong>Inter parto</strong></td>
                    <td><strong>Peso nacimiento</strong></td>
                    <td><strong>Fecha destete</strong></td>
                    <td><strong>Peso destete</strong></td>
                    <td><strong>Peso 205 días</strong></td>
                    <td><strong>Índice</strong></td>
                    <td><strong>Peso 18 meses</strong></td>
                    <td><strong>Índice</strong></td>
                    <td><strong>Observaciones</strong></td>
                </tr>
            </thead>            
            <tbody></tbody>
        </table>
    </form>
</div>
<div id="crias"></div>
<script>
    $(document).ready(function () {
        cargarCrias();
    }
    );
</script>