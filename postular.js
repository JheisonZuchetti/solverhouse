$("#postular").submit(function(event){
    event.preventDefault();//almacena los datos sin refrescar el sitio web
    enviar();
});

function enviar(){
    var datos = $("#postular").serialize(); //el serialize toma todos los datos 'name' y los lleva a un arreglo
    //console.log(datos);
    $.ajax({
        type: "post",
        url:"ajax/postular.php",
        data: datos,
        success: function(texto){
            if(texto=="exit"){
                correcto();
            }
            
            else{
                phperror(texto);
            }
        }
    })
}

function correcto(){
    $("#Exito").removeClass("rgdisplay");  
    $("#Error").addClass("rgdisplay");

}


function phperror(texto){
    $("#Error").removeClass("rgdisplay");
    $("#Error").html(texto); //el .html nos permite escribir dentro de la caja de texto
}