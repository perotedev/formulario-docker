<?php
    require_once 'conexao.php';

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $nacionalidade = $_POST['nacionalidade'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $emailc = $_POST['emailc'];

    if (empty($cpf)) {
        echo "<script> alert('Erro! Nenhum cliente a ser editado!'); window.location='../index.php'; </script>";
    }
        else if ( $email != $emailc ) {
            echo "<script> alert('Os e-mail inseridos são diferentes! Confirme novamente os e-mails!'); window.location='../editar.php?cpfCliente=$cpf'; </script>";
        }
            else {
                $atualizarCliente = conectarAoBanco()->prepare("UPDATE tb_cadastros SET nome = '$nome', nascimento = '$nascimento', nacionalidade = '$nacionalidade', telefone = '$telefone', celular = '$celular', email = '$email' WHERE cpf = '$cpf'");
                
                if ($atualizarCliente->execute()) {
                    echo "<script> alert ('Cliente atualizado com sucesso!'); window.location='../listar.php'; </script>";
                }
                    else {
                        echo "<script> alert ('Erro ao atualizar cliente! Tente novamente!'); window.location='../editar.php?cpfCliente=$cpf'; </script>";
                    }
            }

?>