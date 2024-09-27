<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Filme</th>
      <th scope="col">Gênero</th>
      <th scope="col">Indicação</th>
      <th scope="col">Lançamento</th>
      <th scope="col">Duração</th>
      <th scope="col">Diretor</th>
      <th scope="col">Produtora</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include("conexao.php");
        $select = "SELECT * from produtos;"
        $filmes = $conn->query($select);
        if(!empty($filmes))
        while($row = $filmes->fetch_assoc()){
            //Exibe as informações de cada linha do banco, dentro da tabela
            echo "<tr><td>".$row["id"]."</td>
            <td>".$row["filme"]."</td>
            <td>".$row["genero"]."</td>
            <td>".$row["indicacao"]."</td>
            <td>".$row["lancamento"]."</td>
            <td>".$row["duracao"]."</td>
            <td>".$row["diretor"]."</td>
            <td>".$row["produtora"]."</td>
            <td>".$row["valor"]."</td>
    
            <form action='index.php' method='POST'>
            <input type='hidden' name='id' value='".$row["id"]."'>
            <input type='hidden' name='filme' value='".$row["filme"]."'>
            <input type='hidden' name='genero' value='".$row["genero"]."'>
            <input type='hidden' name='indicacao' value='".$row["indicacao"]."'>
            <input type='hidden' name='lancamento' value='".$row["lancamento"]."'>
            <input type='hidden' name='duracao' value='".$row["duracao"]."'>
            <input type='hidden' name='diretor' value='".$row["diretor"]."'>
            <input type='hidden' name='produtora' value='".$row["produtora"]."'>
            <input type='hidden' name='valor' value='".$row["valor"]."'>
    
            <input type='submit'name='action' value='Selecionar'>
    
            <input type='submit'name='action' value='Deletar'>
            </form>
            </tr>";
        }
    ?>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>