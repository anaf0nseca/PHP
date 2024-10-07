<?php

    INCLUDE('conexao.php');
    $id = $_POST['id'];
    $delete = "DELETE FROM produtos where id=".$id;
    $retorno = $conn->query($delete);
    header('location: index.php');
          
