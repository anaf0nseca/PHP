<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Inserir novo filme</title>
</head>
<body>
    <?php include("conexao.php"); ?>
    <div id="insert-form">
        <form action="inserir.php" class="form" method="POST">
            Filme: <input type="text" class="m-2"  name="filme"  ><br>
            Gênero: <input type="text" class="m-2"  name="genero"><br>
            Indicação: <input type="text" class="m-2"  name="indicacao"><br>
            Lançamento: <input type="text" class="m-2"  name="lancamento" ><br>
            Duração: <input type="text" class="m-2"  name="duracao"><br>
            Diretor: <input type="text" class="m-2"  name="diretor"><br>
            Produtora: <input type="text" class="m-2"  name="produtora" ><br>
            Valor: <input type="text" step="0.01" class="m-2"  name="valor"><br>
            <input type="submit" class="btn btn-info" value="Cadastrar">    

        </form>
    </div>
    <?php

    if(!empty($_POST['filme']) && 
    !empty($_POST['genero']) && 
    !empty($_POST['indicacao']) && 
    !empty($_POST['lancamento']) && 
    !empty($_POST['duracao']) &&
    !empty($_POST['diretor']) &&
    !empty($_POST['produtora']) &&
    !empty($_POST['valor'])
    ){
        //Armazena os dados em variaveis
        $id = $_POST['id'];
        $filme = $_POST['filme'];
        $genero = $_POST['genero'];
        $indicacao = $_POST['indicacao'];
        $lancamento = $_POST['lancamento'];
        $duracao = $_POST['duracao'];
        $diretor = $_POST['diretor'];
        $produtora = $_POST['produtora'];
        $valor = $_POST['valor'];
        

            $insert = "INSERT into produtos(
            filme, genero, indicacao, lancamento, duracao, diretor, produtora, valor) 
            values('$filme', '$genero', '$indicacao', $lancamento, $duracao, '$diretor', '$produtora', $valor)";
            $retorno = $conn->query($insert);
        

        header('location: index.php');
    
    }
    ?>
</body>
</html>