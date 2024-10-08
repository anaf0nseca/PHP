<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Alterar informações do filme</title>
</head>
<body>

    <?php   
        include('conexao.php');
        

            //pega o numero do id através da URL
            $id = $_GET['id'];

            if(!empty($_GET['id'])){
                //comando para selecionar o filme com o id obtido pelo GET
                $select = 'SELECT * from produtos WHERE id = '.$id;
                //armazena o resultado em uma variavel
                $filmes = $conn->query($select);
                //verifica se a variável não está vazia
                if(!empty($filmes)){
                    
                    while($filme = $filmes->fetch_assoc()){
                        //armazena os valores do filme em variaveis
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



?>
    <!-- formulario com as informações recuperadas pronto para edição dos dados -->
    <div id="update-form" class="row d-flex justify-content-center align-content-center">
        <form class="form" action="update.php" method="POST">
            <input type='hidden' name='id' value="<?php echo $_GET['id']?>">

            Filme: <input type="text"   name="filme" value="<?php echo $fnome; ?>"><br>
            Gênero: <input type="text" name="genero" value="<?php echo $fgenero; ?>"><br>
            Indicação: <input type="text" name="indicacao" value="<?php echo $findicacao; ?>"><br>
            Lançamento: <input type="text" step="0.01" name="lancamento" value="<?php echo $flancamento; ?>" ><br>
            Duração: <input type="text" step="0.01" name="duracao" value="<?php echo $fduracao; ?>" ><br>
            Diretor: <input type="text" step="0.01" name="diretor" value="<?php echo $fdiretor; ?>" ><br>
            Produtora: <input type="text" step="0.01" name="produtora" value="<?php echo $fprodutora; ?>" ><br>
            Valor: <input type="text" step="0.01" name="valor" value="<?php echo $fvalor; ?>" ><br>
            <input type="submit" class="btn btn-success " name="action" value="Salvar">
        </form>
    
    </div>
</body>
</html>