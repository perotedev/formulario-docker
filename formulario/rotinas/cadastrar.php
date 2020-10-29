<?php
    require_once 'conexao.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $nacionalidade = $_POST['nacionalidade'];
    $telefone = $_POST['telefone'];
    $celular  = $_POST['celular'];
    $email = $_POST['email'];
    $emailc = $_POST['emailc'];

    if ( empty($cpf) || empty($nome) || empty($nascimento) || empty($nacionalidade) || empty($celular) || empty($email) || Empty($emailc)) {
        echo "<script> alert('Preencha todos os campos!'); window.history.back(); </script>";
    }
        else if ( $email != $emailc ) {
            echo "<script> alert('Os e-mail inseridos são diferentes! Confirme novamente os e-mails!'); window.history.back(); </script>";
        }
            else {
                $cadastrarCliente = conectarAoBanco()->prepare("INSERT INTO tb_cadastros (cpf, nome, nascimento, nacionalidade, telefone, celular, email) VALUES ('$cpf', '$nome', '$nascimento', '$nacionalidade', '$telefone', '$celular', '$email')");
                
                if ($cadastrarCliente->execute()) {
                    echo "<script> alert ('Cliente cadastrado com sucesso!'); window.location='../listar.php'; </script>";
                }
                    else {
                        echo "<script> alert('Erro ao cadastrar cliente! Tente Novamente!'); window.history.back(); </script>";
                    }
            }
?>