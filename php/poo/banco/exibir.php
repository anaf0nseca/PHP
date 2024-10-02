<?php

include("conexao.php");

$select = "SELECT * FROM usuario";

$retorno = $conexao->query($select);

$usuarios = $retorno->fetchAll(PDO::FETCH_ASSOC);


echo '
    <a href="inserir.php">
        <button type="button">
            Inserir
        </button>
    </a>
    <br>';
foreach($usuarios as $usuario){
    echo "<br>Nome: : " . $usuario['nome'];
    echo "<br>Email: " . $usuario['email'];
    echo "<br>Senha: " . $usuario['senha'];

    echo "<br><a href='atualizar.php?email=". $usuario['email'];
    echo "'><img src='editar.png' width=2%></a>";
    echo "&nbsp&nbsp";
    echo "<a href='deletar.php?email=". $usuario['email'];
    echo "'><img src='deletar.png' width=2%></a>";
    echo "<hr width=30% align='left'>";

}



echo "<pre>";
print_r($usuarios);
