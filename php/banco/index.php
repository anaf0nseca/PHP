<?php
    //Para incluir o documento com a conexão do banco.
    include("conexao.php");

    $sql = "SELECT id, nome, usuario, saldo FROM contas";
    $dados = $conn->query($sql);

    echo "<table><tr><th>ID</th><th>Nome</th><th>Usuário</th><th>Saldo</th></tr>";

    while($row = $dados->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["usuario"]."</td><td>".$row["saldo"]."</td><td>";
    }


?>