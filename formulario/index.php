<?php
    session_start();    
?>

<!DOCTYPE html>

<html lang="pt-BR">

    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="_img/pasta.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Página Inicial | quartaMuitoLoca </title>
        <link rel="stylesheet" href="_css/bootstrap.min.css">
        <link rel="stylesheet" href="_css/master.css">
    </head>

    <body class="bg-light">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php"> Cadastros online totalmente digitais! <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Sobre Nós </a>
                            </li>
                        </ul>
                        <?php                        
                            if ((! isset($_SESSION['logado'])) || ($_SESSION['logado'] != TRUE)) {
                        ?>
                        <div class="nav-item dropdown pl-5">
                            <a class="nav-link dropdown-toggle bg-light btn text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu">
                                <form action ="rotinas/login.php" method="POST" class="px-4 py-3">
                                    
                                    <div class="form-group">
                                        <label for="user">Email</label>
                                        <input type="email" class="form-control" id="user" name='user' placeholder="email@exemplo.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                        <label class="form-check-label" for="lembrar">
                                            Lembrar-me
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Entrar</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="cadastro_usuario.php">Novo por aqui? Regitre-se.</a>
                                <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                            </div>
                        </div>
                        <?php        
                            }
                            else{
                        ?>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle bg-light btn text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Logado
                            </a>
                            
                            <div class="dropdown-menu">
                                <a href="rotinas/sair.php">
                                    <button class="btn btn-primary ml-5">Sair</button>
                                </a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <section id="opcoes">
                <div class="container">
                    <h1 class="display-4 text-center my-5"> Projeto Sistema de Cadastros </h1>

                    <div class="row text-center pt-5">

                        <div class="col-12 col-md-3 mb-5">
                            <a class="text-white" href="cadastrar.php">
                                <div class="bg-primary p-5 rounded">
                                    <img src="_img/cadastrar.png" alt="Cadastrar Cliente">
                                    <p> Cadastrar Cliente</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-3 mb-5">
                            <a class="text-white" href="listar.php">
                                <div class="bg-primary p-5 rounded">
                                    <img src="_img/listar.png" alt="Listar Clientes">
                                    <p> Listar Clientes </p>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-3 mb-5">
                            <a class="text-white" href="pesquisar.php">
                                <div class="bg-primary p-5 rounded">
                                    <img src="_img/pesquisar.png" alt="Pesquisar Clientes">
                                    <p> Pesquisar Cliente</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-3 mb-5">
                            <a class="text-white" href="cadastro_usuario.php">
                                <div class="bg-dark p-5 rounded">
                                    <img src="_img/alterar.png" alt="Cadastrar Usuários">
                                    <p> Criar Login </p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </section>
        </main>

        <footer>

        </footer>

        <script type="text/javascript" src="_js/jquery.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
    </body>

</html>