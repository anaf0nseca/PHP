<?php

include("conexao.php");

$select = "SELECT * FROM produtos limit 5";

$retorno = $conexao->query($select);

$filmes = $retorno->fetchAll(PDO::FETCH_ASSOC);

foreach($filmes as $filme){
    echo "ID: " . $filme['id'];
    echo "<br>Filme: : " . $filme['filme'];
    echo "<br>Gênero: " . $filme['genero'];
    echo "<br>Indicação: " . $filme['indicacao'];
    echo "<br>Produtora: " . $filme['produtora'];
    echo "<hr>";
}

echo "<pre>";
print_r($filmes);
