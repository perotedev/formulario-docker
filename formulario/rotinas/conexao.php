<?php
    function conectarAoBanco() {
        try {
            $username = "root";
            $password = "root";
            $pdo = new PDO('mysql:host=172.19.0.2:3306;dbname=bd_quartaloca', $username, $password);

            $pdo->query("SET character_set_connetcion=utf-8");
            $pdo->query("SET character_set_client=utf-8");
            $pdo->query("SET character_set_results=utf-8");
        }
            catch (PDOException $e) {
                echo 'Erro: '. $e->getMessage();
            }
        return $pdo;
    }
?>