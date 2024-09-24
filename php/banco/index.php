<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Direciona para a mesma pagina, assim as informações do usuário são recarregadas-->
<form action="index.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    Usuário: <input type="text" name="usuario"><br>
    Senha: <input type="text" name="senha"><br>
    Saldo: <input type="number" step="0.01" name="saldo"><br>

    <input type="submit" value="Acessar">    
</form>
<?php
    include("conexao.php");

    //Verifica se os campos não estão vazios e armazena os valores em variaveis
    if(!empty($_POST)){
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $saldo = $_POST['saldo'];

        $insert = "INSERT into contas (nome, usuario, senha, saldo) values ('$nome', '$usuario', '$senha', $saldo )";
        //Insere os valores no banco
        $conn->query($insert);
    }

    //Seleciona os dados dos usuarios na tabela contas
    $sql = "SELECT id, nome, usuario, saldo FROM contas";

    //Armazena os dados retornados na variavel $dados
    $dados = $conn->query($sql);

    //Cria a estrutura da tabela
    echo "<table><tr><th>ID</th><th>Nome</th><th>Usuário</th><th>Saldo</th></tr>";

    //fetch_assoc verifica quantas linhas existem na variavel $dados e atribue a quantidade de linhas a variavel $row
    while($row = $dados->fetch_assoc()){
        //Exibe as informações de cada linha do banco, dentro da tabela
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["usuario"]."</td><td>".$row["saldo"]."</td><td>";
    }

?>


</body>
</html>




