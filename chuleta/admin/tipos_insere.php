<!-- CONECTAR COM O BANCO E SELECIONAR AS INFORMAÇÕES -->
<?php
include 'acesso_com.php';
include '../conn/connect.php';
if ($_POST) {
    $sigla = $_POST['sigla'];
    $rotulo = $_POST['rotulo'];
 
    $insereTipos= "insert tipos
                    (sigla, rotulo)
                    values
                    ('$sigla', '$rotulo')";
    $resultado = $conn->query($insereTipos);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Tipos - Insere</title>
</head>
<body>
<?php include "menu_adm.php";?>
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
            <h2 class="breadcrumb text-danger">
                <a href="produtos_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Inserindo Tipos
            </h2>
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                    <form action="tipos_insere.php" method="post"
                    name="form_insere" enctype="multipart/form-data"
                    id="form_insere">
                        <div class="input-group">
                        </div>
                        <div class="input-group">
                        </div>
                            <label for="tipo">Tipo:</label>    
                        <div class="input-group">
                           <input type="text" name="rotulo" id="rotulo"
                                class="form-control" placeholder="Digite o tipo de produto"
                                maxlength="100" required>
                        </div>  
                        <label for="sigla">Sigla:</label>    
                        <div class="input-group">
                           <input type="text" name="sigla" id="sigla"
                                class="form-control" placeholder="Digite a sigla do tipo"
                                maxlength="100" required>
                        </div>  
                       
                        <br>
                        <input type="submit" name="enviar" id="enviar" class="btn btn-danger btn-block" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
 
</body>
</html>