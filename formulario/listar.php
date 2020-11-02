<?php
    session_start();

    if ((! isset($_SESSION['logado'])) || ($_SESSION['logado'] != TRUE)) {
        echo "<script> alert('Vocẽ precisa fazer login para acessar esta página!'); window.location='index.php'; </script>";
    }
    else{
    require_once "rotinas/conexao.php";

    $listarClientes = conectarAoBanco()->prepare("SELECT * FROM tb_cadastros");
    $listarClientes->execute();
    $contarListarClientes = $listarClientes->rowCount();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Listar | quartaMuitoLoca </title>
        <link rel="stylesheet" href="_css/bootstrap.min.css">
        <link rel="stylesheet" href="_css/master.css">
    </head>

    <body class="bg-light">
        <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container">
                        <div class="collapse navbar-collapse">
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
                            <div class="nav-item dropleft">
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
                        <h1 class="display-4 text-center my-5"> Listar </h1>

                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"> CPF </th>
                                    <th scope="col"> Nome </th>
                                    <th scope="col"> Data de Nascimento </th>
                                    <th scope="col"> Celular </th>
                                    <th scope="col"> E-mail </th>
                                    <th scope="col"> Editar </th>
                                    <th scope="col"> Excluir </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    if ($contarListarClientes > 0) {
                                        foreach ($listarClientes as $dado) { 
                                ?>

                                        <tr>
                                            <td scope="row"> <?php echo $dado['cpf']; ?> </td>
                                            <td> <?php echo $dado['nome']; ?> </td>
                                            <td> <?php echo $dado['nascimento']; ?> </td>
                                            <td> <?php echo $dado['celular']; ?></td>
                                            <td> <?php echo $dado['email']; ?></td>
                                            <td> <a href="editar.php?cpfCliente=<?php echo $dado['cpf']; ?>"> <img src="_img/editar.png" alt="Editar Cliente"> </a> </td>
                                            <td> <a href="rotinas/excluir.php?cpfCliente=<?php echo $dado['cpf']; ?>"> <img src="_img/lixeira.png" alt="Excluir Cliente"> </a> </td>
                                        </tr>

                                <?php
                                        }
                                    }
                                        else {
                                ?>
                                            
                                            <tr>
                                                <td class="text-center" colspan="7"> Não há clientes cadastrados! </td>
                                            </tr>
                            
                                <?php            
                                        }
                                ?>
                            </tbody>
                        </table>
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