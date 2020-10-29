<?php
    require_once 'conexao.php';
    $usuario = $_POST['email'];
    $senha = $_POST['password'];
    
    $listarClientes = conectarAoBanco()->prepare("SELECT * FROM tb_usuarios WHERE email = '$usuario'");
    $listarClientes->execute();
    $contarClientes = $listarClientes->rowCount();
    $disponivel = TRUE;

    if (($usuario != NULL && $usuario != "") && ($senha != NULL && $senha != "")){
        if ($contarClientes > 0){
            foreach ($listarClientes as $dado){
                if ($usuario == $dado['email']){
                    $disponivel = FALSE;
                    break;
                }
            }
        }

        if ($disponivel == TRUE){
            $cadastrarUsuario = conectarAoBanco()->prepare("INSERT INTO tb_usuarios (email, senha) VALUES ('$usuario', '$senha')");
    
            if ($cadastrarUsuario->execute()){
                echo "<script> alert('Usuário cadastrado com sucesso!'); window.location='../index.php'; </script>";
    
            }
            else{
                echo "<script> alert('Erro ao cadastrar usuário!'); window.location='../cadastro_usuario.php'; </script>";
            }
        }
        else{
            echo "<script> alert('Este e-mail já está cadastrado!'); window.history.back(); </script>";
        }
    }
    else{
        echo "<script> alert('Preencha todos os campos!'); window.history.back(); </script>";
    }
?>