<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Lista de filmes</title>
</head>
<body>

<form action="inserir.php">

<input type="submit" class="btn btn-success m-1 pr-3 pl-3" name='action' value='Inserir novo filme'>
</form>
<table class="table table-bordered table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col-sm-1">ID</th>
      <th scope="col">Filme</th>
      <th scope="col">Gênero</th>
      <th scope="col">Indicação</th>
      <th scope="col">Lançamento</th>
      <th scope="col">Duração</th>
      <th scope="col">Diretor</th>
      <th scope="col">Produtora</th>
      <th scope="col">Valor</th>
      <th scope="col">Ação</th>
      <th scope="col">Ação</th>

    </tr>
  </thead>
  <tbody>

    <?php
      include("conexao.php"); 
        //Retorna todos os filmes
        $select = "SELECT * from produtos";
        //Armazena os valores em uma variavel
        $filmes = $conn->query($select);

        if(!empty($filmes)){
        //Percorre as linhas da tabela e exibe na tela
        while($row = $filmes->fetch_assoc()){
            //Exibe as informações de cada linha do banco, dentro da tabela
            echo 
            "<tr><td>".$row["id"]."</td>
            <td>".$row["filme"]."</td>
            <td>".$row["genero"]."</td>
            <td>".$row["indicacao"]."</td>
            <td>".$row["lancamento"]."</td>
            <td>".$row["duracao"]."</td>
            <td>".$row["diretor"]."</td>
            <td>".$row["produtora"]."</td>
            <td>".$row["valor"]."</td>
            
            
            <td>
            <form action='atualizar.php' method='GET'>
            <input type='hidden' name='id' value='".$row["id"]."'>
            <a href='atualizar.php?id=".$row['id']."'><button class='btn btn-info'>Alterar</button></a>
            </td>
            </form>


            <td>
            <form action='deletar.php' method='POST'>
            <input type='hidden' name='id' value='".$row["id"]."'>
            <input type='submit' class='btn btn-danger' name='action' value='Deletar'>

            </td>
            </form>


            </tr>";
        }


        }


    ?>
  </tbody>
</table>
</body>
</html>
