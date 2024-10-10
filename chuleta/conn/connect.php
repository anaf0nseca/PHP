<?php

$host = "localhost";
$database = "tincphpdb01";
$user = "root";
$pass = "";
$charset = "utf8";
$port = "3306";

//tratamento de erro
try{
    $conn = new mysqli($host, $user, $pass, $database, $port);
    mysqli_set_charset($conn, $charset);
}catch(Throwable $th){
    die("Ocorreu um erro: " .$th);
}

?>