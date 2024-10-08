<?php
include("conexao.php"); 

    //Armazena todos os dados inseridos no formulário
    $filme = $_POST['filme'];
    $genero = $_POST['genero'];
    $indicacao = $_POST['indicacao'];
    $lancamento = $_POST['lancamento'];
    $duracao = $_POST['duracao'];
    $diretor = $_POST['diretor'];
    $produtora = $_POST['produtora'];
    $valor = $_POST['valor'];
        
    //Insere as informações no banco 
    $insert = "INSERT into produtos(filme, genero, indicacao, lancamento, duracao, diretor, produtora, valor) 
    values('$filme', '$genero', '$indicacao', $lancamento, $duracao, '$diretor', '$produtora', $valor)";
    $retorno = $conn->query($insert);
        
    //Redireciona para a pagina inicial
    header('location: index.php');