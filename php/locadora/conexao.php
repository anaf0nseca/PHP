<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locadora";

//Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//Verificar conexão
if($conn->connect_error){
    die("Falha ao conectar ao banco: ".$conn->connect_error);
}
 //echo"Conectado com sucesso."; 


// $dsn = 'mysql:host=localhost;dbname=locadora';
// $user = 'root';
// $pass = '';

// $conn = new PDO($dsn, $user, $pass);

// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 ?>


