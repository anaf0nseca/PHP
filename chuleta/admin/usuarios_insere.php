<!-- CONECTAR COM O BANCO E SELECIONAR AS INFORMAÇÕES -->
<?php
include 'acesso_com.php';
include '../conn/connect.php';

if($_POST){

    $nivel = $_POST['nivel'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];



    $insereUsuarios = 
        "insert usuarios
        (login, senha, nivel)
        values ('$login', md5('$senha'), '$nivel')";
        $resultado = $conn->query($insereUsuarios);
        if(mysqli_insert_id($conn)){
            header('location: usuarios_lista.php');
        }
        
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Produto - Insere</title>
</head>
<body>
<?php include "menu_adm.php";?>
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
            <h2 class="breadcrumb text-info">
                <a href="produtos_lista.php">
                    <button class="btn btn-info">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Inserindo usuários
            </h2>
            <div class="thumbnail">
                <div class="alert alert-info" role="alert">
                    <form action="usuarios_insere.php" method="post" 
                    name="form_insere" enctype="multipart/form-data"
                    id="form_insere">
 
                            <label for="descricao">Login:</label>     
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                           </span>
                           <input type="text" name="login" id="login" 
                                class="form-control" placeholder="Digite o login"
                                maxlength="100" required>
                        </div>   
                        <label for="descricao">Senha:</label>     
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                           </span>
                           <input type="password" name="senha" id="senha" 
                                class="form-control" placeholder="Digite a sua senha"
                                maxlength="100" required>
                        </div>   
                         
                        <label for="nivel">Nivel:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <select name="nivel" id="nivel" class="form-control" required>
                                <option value="sup">SUP</option>                                
                                <option value="com">COM</option>                                
                                
                            </select>
                        </div>
                        

                        <br>
                        <input type="submit" name="enviar" id="enviar" class="btn btn-info btn-block" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Script para imagem -->
<script>
document.getElementById("imagem").onchange = function(){
    var reader = new FileReader();
    if(this.files[0].size>512000){
        alert("A imagem deve ter no máximo 500KB");
        $("#imagem").attr("src", "blank");
        $("#imagem").hide();
        $("#imagem").wrap('<form>').closest('form').get(0).reset();
        $("#imagem").unwrap();
        return false
    }
    if(this.files[0].type.indexOf("image")==-1){
        alert("formato inválido, escolha uma imagem!");
        $("#imagem").attr("src", "blank");
        $("#imagem").hide();
        $("#imagem").wrap('<form>').closest('form').get(0).reset();
        $("#imagem").unwrap();
        return false
    }
    reader.onload = function(e){
        document.getElementById("imagem").src = e.target.result
        $("#imagem").show();
    }
    reader.readAsDataURL(this.files[0])
}    
</script>

</body>
</html>