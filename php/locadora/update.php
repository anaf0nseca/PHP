
<?php
include('conexao.php');
    //Armazena os valores enviados pelo POST através do formulário
    $filme = $_POST['filme'];
    $genero = $_POST['genero'];
    $indicacao = $_POST['indicacao'];
    $lancamento = $_POST['lancamento'];
    $duracao = $_POST['duracao'];
    $diretor = $_POST['diretor'];
    $produtora = $_POST['produtora'];
    $valor = $_POST['valor'];

    //Comando para atualizar a tabela com os dados inseridos no formulário
    $update = "UPDATE produtos set filme = '$filme', genero = '$genero', indicacao = '$indicacao', lancamento = $lancamento, duracao = '$duracao', diretor = '$diretor', produtora = '$produtora', valor = $valor WHERE id = ".$_POST['id'];
    //executa o comando no banco
    $retorno = $conn->query($update);

    header('location: index.php');


