$(document).ready(function(e){
    $('#datatable-column-interactive1').DataTable({
        "ajax":{
            "url": "http://localhost/ejemplo/dataapp/apiCliente/Cliente/Clientes",
            "dataType": "json",
            paging: false,
            searching: false
        },
        "columns":[
            {"data": "Cliente_codigo"},
            {"data": "apellido"},
            {"data": "nombre"}
           
        ]
    
    });

}); 