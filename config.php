<?php

    $server = "127.0.0.1";
    $sql = "login";
    $user = "root";
    $pwd = "";
    global $pdo;

    try {
        $pdo = new \PDO("mysql:host=$server;dbname=$sql",$user,$pwd);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        //echo "Conectado com sucesso";
    } catch (\PDOException $erro) {
        echo "Ocorreu erro na conexão: {
            $erro->getMessage()
            }";
        }
            
?>
