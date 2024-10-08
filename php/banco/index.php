<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- http://localhost/ana/php/banco/index.php -->
 
<?php
    include("conexao.php");

    $cnome = "";
    $cusuario = "";
    $csaldo = "";
    $csenha = "";
    
    //Verifica se os campos do formulário não estão vazios e armazena os valores em variaveis
    if(!empty($_POST['nome']) && !empty($_POST['usuario']) && !empty($_POST['senha']) && !empty($_POST['saldo'])){
        //Armazena os dados em variaveis
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $saldo = $_POST['saldo'];
        //Verifica se o botão clicado foi "Cadastrar"
        if($_POST['action'] == 'Cadastrar'){
            
            $insert = "INSERT into contas (nome, usuario, senha, saldo) values ('$nome', '$usuario', '$senha', $saldo )";
            //Insere os valores no banco
            $conn->query($insert);
            
        //Verifica se o botão clicado foi "Atualizar"
        }else if($_POST['action'] == 'Atualizar'){
            //echo "<script>alert('$id');</script>";
            $update = "UPDATE contas set nome = '$nome', usuario = '$usuario', senha = '$senha', saldo = $saldo where id = ".$_POST['id'];
            $conn->query($update);
        }elseif ($_POST['action'] == 'Limpar'){
            $cnome = "";
            $cusuario = "";
            $csaldo = "";
            $csenha = "";
        }
    }
    
    //Verifica se o campo 'id' tem valor
    if(!empty($_POST['id'])){
        //Verifica se o botão clicado foi "Deletar"
        if($_POST['action'] == 'Deletar'){
            $delete = "DELETE FROM contas where id=".$_POST['id'];
            $conn->query($delete);


        //Verifica se o botão clicado foi "Selecionar"
        }else if($_POST['action'] == 'Selecionar'){
            $select = "SELECT * from contas where id=".$_POST['id'];
            $dado = $conn->query($select);
            if(!empty($dado)){
                while($cliente = $dado->fetch_assoc()){
                    $cnome = $cliente["nome"];
                    $cusuario = $cliente["usuario"];
                    $csaldo = $cliente["saldo"];
                    $csenha = $cliente["senha"];

                }
            }

        }

    }
    //Seleciona os dados dos usuarios na tabela contas
    $sql = "SELECT * FROM contas";

    //Armazena os dados retornados na variavel $dados
    $dados = $conn->query($sql);

    //Cria a estrutura da tabela
    echo "<table><tr><th>ID</th><th>Nome</th><th>Usuário</th><th>Saldo</th></tr>";

    //fetch_assoc verifica quantas linhas existem na variavel $dados e atribue a quantidade de linhas a variavel $row
    while($row = $dados->fetch_assoc()){
        //Exibe as informações de cada linha do banco, dentro da tabela
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["usuario"]."</td><td>".$row["saldo"]."</td><td>

        <form action='index.php' method='POST'>
        <input type='hidden' name='id' value='".$row["id"]."'>
        <input type='hidden' name='nome' value='".$row["nome"]."'>
        <input type='hidden' name='usuario' value='".$row["usuario"]."'>
        <input type='hidden' name='senha' value='".$row["senha"]."'>

        <input type='hidden' name='saldo' value='".$row["saldo"]."'>

        <input type='submit'name='action' value='Selecionar'>

        <input type='submit'name='action' value='Deletar'>
        </form>
        </tr>";
    }

?>
   <!-- Direciona para a mesma pagina, assim as informações do usuário são recarregadas-->
<form action="index.php" method="POST">
    <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>">

    Nome: <input type="text" name="nome" value="<?php echo $cnome; ?>"><br>
    Usuário: <input type="text" name="usuario" value="<?php echo $cusuario; ?>"><br>
    Senha: <input type="text" name="senha" value="<?php echo $csenha; ?>"><br>
    Saldo: <input type="number" step="0.01" name="saldo" value="<?php echo $csaldo; ?>" ><br>
    <input type='submit' name='action' value='Atualizar'>
    <input type="submit" name='action' value="Cadastrar">   
    <input type="submit" name='action' value="Limpar">    

</form>

</body>
</html>




