<?php
include("conexao.php");

$update = "UPDATE usuario set filme = 'Os estagiarios' where id = 1";

$retorno = $conexao->exec($update);
header('Location: select.php');