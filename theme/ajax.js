$(document).ready(function(){
    //console.log("entre a .js 1");
    $("#btn-insert2").click(function(){
      //  console.log("entre a btn-insert2");
        var apellido1=$("#apellido").val();
        var nombre1=$("#nombre").val();
        
        var dataString = 'apellido='+ apellido1 + '&nombre=' + nombre1;
        console.log(apellido1);
        console.log(nombre1);


        $.ajax({
            url: "http://localhost/ejemplo/dataapp/apiCliente/Cliente/insertarCliente",
            type: "POST",
            dataType: "json",
            data: dataString
            //data: [{"apellido":apellido1,"nombre":nombre1}]
        })
        .done(function(info) {
            console.log(info['data']);
            })
        .fail(function(info) {
            alert("error");
            })
        .always(function(xhr, textStatus) {
                console.log(textStatus);
             });
            
        });//done
        
    
    });

/*
$(document).ready(function(){
    $("button").click(function(){
        $.ajax({
            url: "http://localhost/ejemplo/dataapp/apiCliente/Cliente/Clientes",
            type: "GET",
            dataType: "json",
        })
        .done(function(info) {
            console.log(info);
            $.each(info['data'], function(index,obj){
                $("#info").append(obj.apellido + " "+ obj.nombre + "<br>");
            });
            
        })//done
        .fail(function(info) {
            alert("error");
        })
        .always(function(xhr, textStatus) {
            console.log(textStatus);
            
        });
        
    });
    
});
*/