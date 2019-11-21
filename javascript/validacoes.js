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

$(function(){
    $('#cadProduto').submit(function(){
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
                if(data == "ErroNome"){
                    $('#mensagem').text("Campo nome vazio!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroDesc"){
                    $('#mensagem').text("Campo descrição vazio!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroPreco"){
                    $('#mensagem').text("Campo preço vazio!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroEstoque"){
                    $('#mensagem').text("Digite a quantidade em estoque do produto!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroSalvar"){
                    $('#mensagem').text("Não foi possível salvar a imagem!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroFormato"){
                    $('#mensagem').text("A imagem não está em um formato correto!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroImgVazio"){
                    $('#mensagem').text("Por favor, selecione uma imagem para o produto!");
                    $('#vazio').modal('show');
                }
                if(data == "ErroBanco"){
                    $('#mensagem').text("Não foi possível cadastrar o produto. Contate o suporte!");
                    $('#vazio').modal('show');
                }
                if(data == "Sucesso"){
                    $('#mensagem').text("Cadastro realizado com sucesso!");
                    $('#vazio').modal('show');
                    setTimeout(function(){ location.reload(); }, 2500);
                }

                
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora

$(function(){
    $('#buscarProdutos').submit(function(){
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
                if(data == "ErroProduto"){
                    $('#mensagem').text("Digite o nome do produto que deseja buscar!");
                    $('#vazio').modal('show');
                    return;
                }
                if(data == "ErroNaoExiste"){
                    $('#mensagem').text("Nenhum produto encontrado!");
                    $('#vazio').modal('show');
                    return;
                }
                if(data != "ErroProduto" && data != "ErroNaoExiste"){
                    $('#respostaBusca').html(data);
                }

                
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora


