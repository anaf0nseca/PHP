<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    ?>
<form action="update.php" method="POST">
    Nome: <input type="text" name="<?php echo $nome; ?>"><br>
    Email: <input type="text" name="<?php echo $email; ?>"><br>
    Senha: <input type="text" name="<?php echo $senha; ?>"><br>
    <input type="submit" id="botao" value="Enviar">    
</form>
</body>
</html>