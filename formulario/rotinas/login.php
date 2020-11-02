<?php
    require_once "conexao.php";

    $user = $_POST['user'];
    $password = $_POST['password'];

    $listarLogin = conectarAoBanco()->prepare("SELECT * FROM tb_usuarios WHERE email = '$user'");
    $listarLogin->execute();
    $contarLogin = $listarLogin->rowCount();

    if ($contarLogin < 1) {
        echo "<script> alert('Usuário não cadastrado!'); window.history.back(); </script>";
    }
 
    else{        
        foreach ($listarLogin as $dado){
            if ($dado['email'] == "$user"){
                if($dado['senha'] == "$password"){
                    session_start();
                    $_SESSION['logado'] = TRUE;
                    header("Location: ../index.php");
                    break;
                }
                else{
                    echo "<script> alert('Senha incorreta!'); window.history.back(); </script>";
                }
                break;
            }
        }
       echo "<script> alert('Erro ao fazer login!'); window.history.back(); </script>";
    }
?>
<!--
session_start();
    $_SESSION["usuario"] = $_POST["user"];
    $_SESSION["autenticado"] = TRUE;
    header("Location: logon.php");
-->