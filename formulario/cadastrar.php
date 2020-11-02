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
        <link rel="shortcut icon" href="_img/pasta.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cadastrar | quartaMuitoLoca </title>
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
                    <h1 class="display-4 text-center my-5"> Cadastrar </h1>

                    <form action="rotinas/cadastrar.php" method="POST">
                        <div class="row">
                            <div class="col"></div>

                            <div class="col-12 col-md-4">

                                <div class="form-group">
                                    <label for="nome"> Nome </label> <!-- placeholder -->
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="João Rodrigues da Silva" required>
                                    <small id="nome-ajuda" class="form-text text-muted"> Ex.: João Rodrigues da Silva </small>
                                </div>

                                <div class="form-group">
                                    <label for="nascimento"> Data de Nascimento </label>
                                    <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="dd/mm/aaaa" required>
                                    <small id="nascimento-ajuda" class="form-text text-muted"> Ex.: dd/mm/aaaa </small>
                                </div>

                                <div class="form-group">
                                    <label for="telefone"> Telefone </label> <!-- placeholder -->
                                    <input type="tel" class="form-control " id="telefone" name="telefone" placeholder="(XX) XXXX-XXXX">
                                    <small id="telefone-ajuda" class="form-text text-muted"> Ex.: (XX) XXXX-XXXX </small>
                                </div>

                                <div class="form-group">
                                    <label for="email"> E-mail </label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
                                    <small id="email-ajuda" class="form-text text-muted"> Ex.: email@exemplo.com </small>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="cpf"> CPF - *apenas números </label> <!-- placeholder -->
                                    <input type="text" class="form-control " id="cpf" name="cpf" placeholder="00000000000" required>
                                    <small id="cpf-ajuda" class="form-text text-muted"> Ex.: 00000000000</small>
                                </div>

                                <div class="form-group">
                                    <label for="nacionalidade"> Nacionalidade </label>
                                    <!-- <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Ex: Brasileiro" required> -->
                                    <select class="form-control" name="nacionalidade" required>
                                        <option value="Brasileiro"> Brasileira </option>
                                        <option value="Estrangeiro"> Estrangeira </option>
                                    </select>
                                    <small id="nacionalidade-ajuda" class="form-text text-muted"> Selecione uma opção </small>
                                </div>

                                <div class="form-group">
                                    <label for="celular"> Celular </label> <!-- placeholder -->
                                    <input type="tel" class="form-control " id="celular" name="celular" placeholder="(XX) 9XXXX-XXXX" required>
                                    <small id="celular-ajuda" class="form-text text-muted"> Ex.: (XX) 9XXXX-XXXX </small>
                                </div>

                                <div class="form-group">
                                    <label for="email"> Confirme o e-mail </label>
                                    <input type="email" class="form-control" id="emailc" name="emailc" placeholder="email@exemplo.com" required>
                                    <small id="email-ajuda" class="form-text text-muted"> Ex.: email@exemplo.com </small>
                                </div>
                            </div>

                            <div class="col"></div>
                        </div>

                        <div class="row">
                            <div class="col"></div>

                            <div class="col-12 col-md-8">
                                <button type="submit" class="btn btn-primary w-100 mb-5"> Cadastrar </button>
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