<?php

    INCLUDE('conexao.php');
    //Recupera o ID enviado através do formulário com campo oculto
    $id = $_POST['id'];
    //Deleta do banco o filme com o ID
    $delete = "DELETE FROM produtos where id=".$id;
    //Executa o comando
    $retorno = $conn->query($delete);
    //Redireciona para a página inicial
    header('location: index.php');
          
