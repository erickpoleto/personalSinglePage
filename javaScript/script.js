
$(function(){
    verificaEmail();
   
});

function verificaEmail(){
    var email = $(".email");
    var enviar = $(".enviar");
    if(email.val() == 0){
            enviar.attr("disabled", true);
            enviar.addClass("desabilitado");
    }
    email.on("input", function(){
        if(email.val() == 0){
            enviar.attr("disabled", true);
            enviar.addClass("desabilitado");
        }else{
            enviar.removeClass("desabilitado");
        }
    
    });
    
}