<?php 
include("./config.php");

    try {
        $sql = $pdo->prepare("SELECT * FROM `loginPhp` WHERE `id` ORDER BY `id`");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        echo $e->getMessage();
    }

?>