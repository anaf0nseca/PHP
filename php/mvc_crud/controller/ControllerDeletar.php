<?php
require_once("../model/banco.php");

class deleta{

    private $deleta;

    public function __construct($id){
        $this->deleta= new Banco();
        if($this->deleta->deletaLivro($id) == TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/index.php'";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back() </script>";
        }
    }
}

new delete($_GET['id']);

?>
