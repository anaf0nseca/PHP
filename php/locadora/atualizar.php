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
        <form action="index.php">
            Filme: <input type="text"  class="form-control" name="filme" value="<?php echo $filme; ?>"><br>
            Gênero: <input type="text" name="genero" value="<?php echo $genero; ?>"><br>
            Indicação: <input type="text" name="indicacao" value="<?php echo $indicacao; ?>"><br>
            Lançamento: <input type="number" step="0.01" name="lancamento" value="<?php echo $lancamento; ?>" ><br>
            Duração: <input type="number" step="0.01" name="duracao" value="<?php echo $duracao; ?>" ><br>
            Diretor: <input type="number" step="0.01" name="diretor" value="<?php echo $diretor; ?>" ><br>
            Produtora: <input type="number" step="0.01" name="produtora" value="<?php echo $produtora; ?>" ><br>
            Valor: <input type="number" step="0.01" name="valor" value="<?php echo $valor; ?>" ><br>
        </form>
    
    </div>
</body>
</html>