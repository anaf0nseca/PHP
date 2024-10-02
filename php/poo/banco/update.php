<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$emailantigo = $_POST['emailantigo'];
$senha = $_POST['senha'];

$update = "UPDATE usuario set 
        nome = '$nome',
        email = '$email',
        senha = '$senha'
        where email = '$emailantigo'";


$retorno = $conexao->exec($update);
header('Location: exibir.php');