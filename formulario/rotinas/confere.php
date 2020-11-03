<?php
    require_once 'conexao.php';

    function confere1(){
        $check1 = conectarAoBanco()->prepare("SELECT * FROM tb_cadastros");
        $check1->execute();
        $cont1 = $check1->rowCount();

        if ($cont1 < 1){
            $check1=conectarAoBanco()->prepare("CREATE TABLE tb_cadastros (cpf VARCHAR(11) NOT NULL, nome VARCHAR(50) NOT NULL, nascimento DATE NOT NULL, nacionalidade VARCHAR(30) NOT NULL, telefone VARCHAR(10), celular VARCHAR(11) NOT NULL, email VARCHAR(30) NOT NULL, PRIMARY KEY(cpf));");
        }
        return $check1;
    }

    function confere2(){
        $check2 = conectarAoBanco()->prepare("SELECT * FROM tb_usuarios");
        $check2->execute();
        $cont2 = $check2->rowCount();

        if ($cont2 < 1){
            $check2=conectarAoBanco()->prepare("CREATE TABLE tb_usuarios (email VARCHAR(50) NOT NULL, senha VARCHAR(8) NOT NULL, PRIMARY KEY(email));");
        }
        return $check2;
    }
?>