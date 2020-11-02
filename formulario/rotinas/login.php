<?php
    require_once "conexao.php";

    $user = $_POST['user'];
    $password = $_POST['password'];

    $listarLogin = conectarAoBanco()->prepare("SELECT * FROM tb_usuarios WHERE email = '$user'");
    $listarLogin->execute();
    $contarLogin = $listarLogin->rowCount();

    if ($contarLogin < 1) {
        echo "<script> alert('Usuário não cadastrado!'); window.location='../index.php'; </script>";
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
                    echo "<script> alert('Senha incorreta!'); window.location='../index.php'; </script>";
                }
                break;
            }
        }
       echo "<script> alert('Erro ao fazer login!'); window.location='../index.php'; </script>";
    }
?>
<!--
session_start();
    $_SESSION["usuario"] = $_POST["user"];
    $_SESSION["autenticado"] = TRUE;
    header("Location: logon.php");
-->