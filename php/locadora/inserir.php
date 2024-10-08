<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Inserir novo filme</title>
</head>
<body>
    <!-- Formulário para inserção de dados do filme no banco -->
    <div id="insert-form" class="row d-flex justify-content-center align-content-center">
        <form action="insert.php" class="form" method="POST">
            Filme: <input type="text" class="m-2"  name="filme"  ><br>
            Gênero: <input type="text" class="m-2"  name="genero"><br>
            Indicação: <input type="text" class="m-2"  name="indicacao"><br>
            Lançamento: <input type="text" class="m-2"  name="lancamento" ><br>
            Duração: <input type="text" class="m-2"  name="duracao"><br>
            Diretor: <input type="text" class="m-2"  name="diretor"><br>
            Produtora: <input type="text" class="m-2"  name="produtora" ><br>
            Valor: <input type="text" step="0.01" class="m-2"  name="valor"><br>
            <input type="submit" class="btn btn-success " value="Cadastrar">    

        </form>
    </div>
</body>
</html>