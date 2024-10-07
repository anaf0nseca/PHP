<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Alterar informações do filme</title>
</head>
<body>

    <div>
    <?php   
        include('conexao.php');
        


            $id = $_GET['id'];
            if(!empty($_GET['id'])){

                $select = 'SELECT * from produtos WHERE id = '.$id;
                $filmes = $conn->query($select);
                if(!empty($filmes)){
                    while($filme = $filmes->fetch_assoc()){
                        $fnome = $filme['filme'];
                        $fgenero = $filme['genero'];
                        $findicacao = $filme['indicacao'];
                        $flancamento = $filme['lancamento'];
                        $fduracao = $filme['duracao'];
                        $fdiretor = $filme['diretor'];
                        $fprodutora = $filme['produtora'];
                        $fvalor = $filme['valor'];
                    }

                }
            
            }

            if(!empty($_POST['filme']) && 
            !empty($_POST['genero']) && 
            !empty($_POST['indicacao']) && 
            !empty($_POST['lancamento']) && 
            !empty($_POST['duracao']) && 
            !empty($_POST['diretor']) && 
            !empty($_POST['produtora']) && 
            !empty($_POST['valor'])){
                $nome = $_POST['filme'];
                $genero = $_POST['genero'];
                $indicacao = $_POST['indicacao'];
                $lancamento = $_POST['lancamento'];
                $duracao = $_POST['duracao'];
                $diretor = $_POST['diretor'];
                $produtora = $_POST['produtora'];
                $valor = $_POST['valor'];

                if($_POST['action'] == 'Salvar'){
                    $update = "UPDATE produtos set filme = '$nome', genero = '$genero', indicacao = '$indicacao', lancamento = '$lancamento', duracao = '$duracao', diretor = '$diretor', produtora = '$produtora', valor = '$valor' WHERE id = ".$_POST['id'];
                    $conn->query($update);
                }


            }


?>
        <form action="index.php" method="POST">
            <input type='hidden' name='id' value="<?php echo $_GET['id']?>">

            Filme: <input type="text"   name="filme" value="<?php echo $fnome; ?>"><br>
            Gênero: <input type="text" name="genero" value="<?php echo $fgenero; ?>"><br>
            Indicação: <input type="text" name="indicacao" value="<?php echo $findicacao; ?>"><br>
            Lançamento: <input type="text" step="0.01" name="lancamento" value="<?php echo $flancamento; ?>" ><br>
            Duração: <input type="text" step="0.01" name="duracao" value="<?php echo $fduracao; ?>" ><br>
            Diretor: <input type="text" step="0.01" name="diretor" value="<?php echo $fdiretor; ?>" ><br>
            Produtora: <input type="text" step="0.01" name="produtora" value="<?php echo $fprodutora; ?>" ><br>
            Valor: <input type="text" step="0.01" name="valor" value="<?php echo $fvalor; ?>" ><br>
            <input type="submit" class="btn btn-success" name="action" value="Salvar">
        </form>
    
    </div>
</body>
</html>