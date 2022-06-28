<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DedeDev</title>
    <link rel="stylesheet" href="pers.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

    <body>
        <header id="header">
            <a id="logo" href="https://br.pinterest.com/pin/jesus-te-ama-edileuzaalves31--643522234243506925/">DdDev</a>
            <nav id="nav" >
                <button id="btnMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" id="hamburguer">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                </button>
                <ul id="menu">
                    <li id="meio"><center>Cadastrar</center></li>
                    <li><a href="cadastroCliente.php">Cliente</a></li>
                    <li><a href="cadastroFuncionario.php">Funcionarios</a></li>
                    <li><a href="cadastroFornecedor.php">Fornecedor</a></li>
                    <li><a href="cadastroProduto.php">Produtos</a></li>
                    <li><a href="cadastroUsuario.php">Usúario</a></li>
                    <li> </li>
                    <li id="meio"><center>VISUALIZAR</center></li>
                    <li><a href="consultaCliente.php">Clientes cadastrados</a></li>
                    <li><a href="consultaFuncionario.php">Funcionarios cadastrados</a></li>
                    <li><a href="consultaFornecedor.php">Fornecedor cadastrados</a></li>
                    <li><a href="consultaProdutos.php">Produtos cadastrados</a></li>
                    <li><a href="consultaUsuario.php">Usúario cadastrados</a></li>
                </ul>
            </nav>

        </header>

        <div class="container">
            <div class="elemento">
                <h1 class="centro"><span class="input"></span></h1>
            </div>
        </div>
        <div class="col-12">
            <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>          
            <script>
                var typed = new Typed(".input", {
                    strings: ["Welcome!", "Bem vindo!", "Bienvenido!" , "환영하다!"],
                    typeSpeed: 90,
                    backSpeed: 70,
                    loop: true
                });
            </script>
        </div>
    </body>
</html>
<script src="./script.js"></script>de