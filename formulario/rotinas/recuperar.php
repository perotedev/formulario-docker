<?php
    require_once 'conexao.php';
    require_once 'confere.php';
    $check1 = confere1();
    $check1->execute();
    $check2 = confere2();
    $check2->execute();

    $user = $_POST['email'];

    if ((empty($user)) || ($user == '')) {
        echo "<script> alert('Erro! Preencha o e-mail!'); window.history.back(); </script>";
    }
        else {
            $recuperarSenha = conectarAoBanco()->prepare("SELECT * FROM tb_usuarios WHERE email = '$user'");
            $recuperarSenha->execute();
            $contarUsuarios = $recuperarSenha->rowCount();
                
            if ($contarUsuarios < 1) {
                echo "<script> alert ('E-mail não cadastrado!'); window.history.back(); </script>";
            }
                else {
                    foreach ($recuperarSenha as $dado){
                        echo "<script> alert ('A senha é $dado[senha]'); window.location='../index.php'; </script>";
                    }
                }
            
        }

?>