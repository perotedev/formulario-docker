<?php

if ($usuario == "" && $_POST["password"] == "") {
        
        
        session_start();
        $_SESSION["usuario"] = $_POST["user"];
        $_SESSION["autenticado"] = TRUE;
        header("Location: logon.php");
    }
 
    else{
        echo "<script> alert('Usuário ou Senha estão incorretos!'); window.history.back(); </script>";
    }
?>