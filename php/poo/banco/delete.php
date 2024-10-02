<?php

include('conexao.php');

$delete = "DELETE from produtos where id = '$gemail'";

$retorno = $conexao->exec($delete);
header('Location: select.php');