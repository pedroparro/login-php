<?php 
//include("./hash.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÁREA DE MEMBROS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    <div class="h2">
        <h2>ÁREA DE MEMBROS</h2>
    </div>
    <!--DIV LOGIN-->
        <div class="login">
        
            <!--FORM-->
            <form class="form" action="./login.php" method="post">
            <!--ERRO---------------------------------------------------------------------------------------------->
                <!--PHP-->  <?php if(isset($_GET['erro'])) { ?>
                                <div class="alert" id="alert">
                <!--PHP-->  <?php echo $_GET['erro']; ?>
                                </div>
                <!--PHP-->  <?php } ?>
    
            <h3>LOGIN</h3>
                <hr>
                <!--DIV-LOGIN-FORM-->
                <div class="login-form">
                    <label for="email">E-mail<br>
                    <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Digite seu email" maxlength="50">
                    </label>
                </div>

                <div class="login-form">
                    <label for="pwd">Senha<br>
                    <i class="fas fa-lock"></i>
                        <input type="text" name="pwd" placeholder="Digite sua senha" maxlength="50">
                    </label>
                </div><br>
                <button type="submit" name="submit" id="submit">Entrar</button>
            </form>
        </div>
</body>
</html>
