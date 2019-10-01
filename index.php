<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css-padrao/css-padrao.css">
    <title>Faça seu Login</title>
    <style>
        body{
            background-image:url('imagens/homeadm.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

    <div class="mt-5">
        <div class="w-50 h-100 mx-auto bg-white">
            <h1 class="text-center text-dark">BEM-VINDO</h1>
            <h2 class="text-center text-dark">FAÇA LOGIN EM NOSSA PLATAFORMA</h2>
            <form action="controller/validarLogin.php" method="POST" id="login">
                <div class="form-row col-10 mx-auto mt-5">
                    <label class="lead col-4" for="">Usuário ou Email</label>
                    <input class="form-control col-8" type="text" 
                    placeholder="Digite aqui seu email ou usuário" name="user" id="user">
                    <div class="col-4"></div>
                    <div class="invalid-feedback d-none col-8" id="userErro">Por favor, digite seu email ou nome de usuário.</div>
                </div>
                <div class="form-row col-10 mx-auto mt-3 mb-5">
                    <label class="lead col-4" for="">Senha</label>
                    <input class="form-control col-8" type="password" 
                    placeholder="Digite aqui sua senha" name="pass" id="pass">
                    <div class="col-4"></div>
                    <div class="invalid-feedback d-none col-8" id="passErro">Por favor, digite sua senha.</div>
                </div>
                <div class="form-row col-10 mx-auto mt-5 mb-5">
                    <input class="form-control btn-outline-success col-5 mx-auto" type="submit" value="ENTRAR">
                </div>
                <div class="alert alert-danger d-none col-5 mx-auto text-center" id="loginErro">Usuário ou senha inválidos.</div>
                <div>
                    <a class="nav-link lead text-center" href="#">Esqueci minha senha</a>
                </div>
            </form>
        </div>

    </div>

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <script src="javascript/validacoes.js"></script>

</body>
</html>