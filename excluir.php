<?php

require_once 'ProdutoDAO.php';

$id = $_POST["id"];

// Validação de dados

if (!$id){
    exit("Campo id precisa ser enviado");
}

$produtoDAO = new ProdutoDAO();
$produtoDAO->excluirPorId($id);

Header("location: index.php");
exit();
?>