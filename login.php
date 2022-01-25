<?php 
include("./config.php");
session_start();//inicia sessao
ob_start(); // limpa buffer de saída

//pegar variaveis
extract($_POST);
if(isset($_POST['email'], $_POST['pwd'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

     //function - SQL INJECTION
     function validate($data){
        $data = preg_replace(preg_quote("/(from|update|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "" ,$data); // remove palavras que contenham sintaxe sql
        $data = ltrim($data); // limpa espaços vazios começo string
        $data = addslashes($data); //  adiciona barras invertidas a um string
        $data = stripslashes($data); // Remove barras invertidas de uma string.
        $data = strip_tags($data); // tira tags html e php
        $data = htmlspecialchars($data); // Converte caracteres especiais em entidades HTML
        return $data;
    }
     //validate - variaveis
     $email = validate($_POST['email']);
     $pwd = validate($_POST['pwd']);
     

    //empty
    if(empty($_POST['email'])){
        header("Location: ./index.php?erro=Email requerido");

    }elseif(empty($_POST['pwd'])){
        header("Location: ./index.php?erro=Senha requerida");
    }
    //query
    $sql = $pdo->prepare("SELECT * FROM loginPhp WHERE email = ?");
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $sql->execute(array($email));
    if($sql->rowCount() > 0){
        $users = $sql->fetch(\PDO::FETCH_ASSOC); 
        //variaveis db
        $id = $users['id'];
        $nome = $users['nome'];
        $email = $users['email'];
        $pass = $users['pwd'];
        $adm = $users['adm'];
        $user = $users['user'];
        //verifica
        if($email === $users['email']){
            if(password_hash($_POST['pwd'],$hash)){
                //adm
                if($adm === $users['adm'] && $users['adm'] === "1"){
                  
                    //session
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['nome'] = $nome;
                    $_SESSION['email'] = $email;
                    $_SESSION['pwd'] = $pass;
                    $_SESSION['adm'] = $adm;
                    $_SESSION['user'] = $user;
                    header("Location: ./dashboard.php");
                    //visitante - user
                }elseif($user === $users['user'] && $users['user'] === "2"){
                    //session
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['nome'] = $nome;
                    $_SESSION['email'] = $email;
                    $_SESSION['pwd'] = $pass;
                    $_SESSION['adm'] = $adm;
                    $_SESSION['user'] = $user;
                    header("Location: ./visitant.php");
                }else{
                    header("Location: ./index.php?erro=Dados Incorretos Email/Senha");
                    die();
                }

            }else{
                header("Location: ./index.php?erro=Dados Incorretos Email/Senha");
                die();
            }
        }else{
            header("Location: ./index.php?erro=Dados Incorretos Email/Senha");
            die();
        }
    }

}else{
    header("Location: ./index.php");
    die();
}

?>