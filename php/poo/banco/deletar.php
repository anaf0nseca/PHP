<?php

include('conexao.php');

$gemail = $_GET['email'];
$delete = "DELETE from usuario where email = '$gemail'";

$retorno = $conexao->exec($delete);
header('Location: exibir.php');