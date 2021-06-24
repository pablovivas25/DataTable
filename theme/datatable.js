$(document).ready(function(e){
    $('#datatable-column-interactive2').DataTable({
        "ajax":{
            "url": "http://localhost/ejemplo/dataapp/apiCliente/Cliente/Clientes",
            "dataType": "json",
        
        },
        "columns":[
            {"data": "Cliente_codigo"},
            {"data": "apellido"},
            {"data": "nombre"}
           
        ]
    
    });

}); 