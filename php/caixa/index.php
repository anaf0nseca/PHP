<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<!-- Preferencialmente, não usar método GET pois ele passa os valores inseridos no formulário para a URL -->
<form action="login.php" method="POST">
    Usuário: <input type="text" name="usuario"><br>
    Senha: <input type="text" name="senha"><br>
    <input type="submit" id="botao" value="Acessar">    
</form>

<?php

    $usuario_log = "ana@gmail.com";
    $senha_log = "123456";
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $tentativas = 0;

    if ( $usuario == $usuario_log && $senha == $senha_log){
        header('Location: ./logado.php');
    }else{

        echo "<script>alert('Email ou senha incorretos');</script>";
        $tentativas++;
        header('Location: ./login.php');

        if($tentativas == 3){
            //echo "<script>document.getElementById("botao").disabled = true;</script>"
            
            echo "<script>alert('Você atingiu o limite de tentativas');</script>";

        }
    }


?>


</body>
</html>

