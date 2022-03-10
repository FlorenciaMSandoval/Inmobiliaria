$(document).ready(function(){

//obteniendo los datos
function obtener_datos(){
$.ajax({
    url:"./controllers/InmobiliariaController.php",
    method:"POST",
    data: {func: 'GestionarUsu'},
    success:function(data){
        $("#resultado").html(data)
    }
})
}
obtener_datos();




$(document).on("click","#eliminar",function(){
if(confirm("Estas seguro de que desea eliminar este registro?")){
    $.ajax({
        url:"./controllers/InmobiliariaController.php",
    method:"POST",
    data: {func: 'EliminarUsuario'},
    success:function(data){
        $("#resultado").html(data)
    
    }
    })
}
})


});