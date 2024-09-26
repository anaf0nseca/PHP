<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco";

//Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//Verificar conexão
if($conn->connect_error){
    die("Falha ao conectar ao banco: ".$conn->connect_error);
}
//echo"Conectado com sucesso.";

?>
