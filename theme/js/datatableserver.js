$(document).ready(function() {
    var dtable=$('#id_clientes').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "scripts/serverside.php",
        "language": espanol,
        "initComplete": function() {
            var $searchInput = $('div.dataTables_filter input');

            $searchInput.off(); //elimina todos los controladores adjuntos a los elementos

            $searchInput.on('keyup', function(e) { //unte un controlador a un evento para los elementos.
                if(this.value.length > 2) {
                    dtable.search( this.value ).draw();
                }    
                 if(this.value == "") {
                    dtable.search("").draw();
                }
                return;
            });
        }
    } );

} );
let espanol = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    }
}