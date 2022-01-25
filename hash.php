<?php
    $password = "1020";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash;
?>