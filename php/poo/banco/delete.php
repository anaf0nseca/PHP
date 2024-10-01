<?php

include('conexao.php');

$delete = "DELETE from produtos where id = 1";

$retorno = $conexao->exec($delete);
header('Location: select.php');