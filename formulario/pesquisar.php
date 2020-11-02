<?php
    session_start();

    if ((! isset($_SESSION['logado'])) || ($_SESSION['logado'] != TRUE)) {
        echo "<script> alert('Vocẽ precisa fazer login para acessar esta página!'); window.location='index.php'; </script>";
    }
    else{
?>       

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Editar | quartaMuitoLoca </title>
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
                                <a class="nav-link" href="index.php"> Início </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Sobre Nós </a>
                            </li>
                        </ul>
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
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <section id="">
                <div class="container">
                    <h1 class="display-4 text-center my-5"> Pesquisar </h1>

                    <form action="resultado.php" method="POST">
                        <div class="row">
                            <div class="col"></div>

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nome"> Digite o nome </label> 
                                    <input type="text" class="form-control" id="nome" name="nome">
                                    <small id="nomeajuda" class="form-text text-muted"> Digite exatamente como no cadastro</small>
                                </div>

                                <div class="form-group">
                                    <label for="cpf"> Ou digite o CPF </label> 
                                    <input type="text" class="form-control" id="cpf" name="cpf">
                                    <small id="cpfajuda" class="form-text text-muted"> Digite o CPF (apenas números) </small>
                                </div>  
                                    
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary w-100 mb-5"> Pesquisar </button>
                                </div>
                            </div>
                       
                            <div class="col"></div>
                        </div>
                    </form>

                </div>
            </section>
        </main>
        

        <script type="text/javascript" src="_js/jquery.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
    </body>

</html>
<?php
    }
?>