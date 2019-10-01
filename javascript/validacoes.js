$(function(){
    $('#login').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroEmail"){
                    var titulo = document.getElementById("user");
                    titulo.className = "form-control col-8 is-invalid";
                    var exibirErro = document.getElementById("userErro");
                    exibirErro.className = "invalid-feedback d-block col-8";
                    titulo.focus();
                }
                else{
                    var titulo = document.getElementById("user");
                    titulo.className = "form-control col-8";
                    var exibirErro = document.getElementById("userErro");
                    exibirErro.className = "invalid-feedback d-none col-8";
                }
                if(data == "ErroSenha"){
                    var titulo = document.getElementById("pass");
                    titulo.className = "form-control is-invalid col-8";
                    var exibirErro = document.getElementById("passErro");
                    exibirErro.className = "invalid-feedback d-block col-8";
                    titulo.focus();
                }
                else{
                    var titulo = document.getElementById("pass");
                    titulo.className = "form-control col-8";
                    var exibirErro = document.getElementById("passErro");
                    exibirErro.className = "invalid-feedback d-none col-8";                    
                }
                if(data == "FalhaLogin"){
                    var titulo = document.getElementById("loginErro");
                    titulo.className = "alert alert-danger d-block col-5 mx-auto text-center";
                }
                else{
                    var titulo = document.getElementById("loginErro");
                    titulo.className = "invalid-feedback d-none col-5";
                }
                if(data == "SucessoCliente"){
                    window.location.replace("view/Home");
                }
                if(data == "SucessoADM"){
                    window.location.replace("view/Administracao");
                }
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora
