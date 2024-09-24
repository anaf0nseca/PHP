<?php
    $contas = array(
        array("ana", 12345, 1523),
        array("lele", 12345, 2035),
        array("kiki", 123456, 1457),
        array("nininha", 1234567, 2563),
        array("apollo", 1234, 5623)
    );

    $usuario_log = "ana@gmail.com";
    $senha_log = "123456";
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $tentativas = 0;

    if ( $usuario == $usuario_log && $senha == $senha_log){
        header('Location: ./logado.php');
    }else{

        echo "<script>alert('Email ou senha incorretos');</script>";
        $tentativas++;
        header('Location: ./login.php');
        if($tentativas == 3){
            //echo "<script>document.getElementById("botao").disabled = true;</script>"
            echo "<script>alert('Você atingiu o limite de tentativas');</script>";

        }
    }


?>