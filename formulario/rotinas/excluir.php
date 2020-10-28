<?php
    require_once 'conexao.php';

    $id = $_GET['cpfCliente'];

    if (empty($id)) {
        echo "<script> alert('Erro! Nenhum cliente a ser excluido'); window.location='../index.php'; </script>";
    }
        else {
            $excluirCliente = conectarAoBanco()->prepare("DELETE FROM tb_cadastros WHERE cpf='$id'");

            if ($excluirCliente->execute()){
                echo "<script> alert('Cliente excluído com sucesso!'); window.location='../listar.php'; </script>";
            }
                else {
                    echo "<script> alert('Erro ao excluir cliente! Tente novamente!'); window.location='../listar.php'; </script>";
                }
        }
?>