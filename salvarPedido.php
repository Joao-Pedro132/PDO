<?php

require_once 'PedidoDAO.php';

$produtoID = $_POST['produto_id'];
$quantidade = $_POST['quantidade'];

if(!$produtoID || $quantidade < 0){
    exit('Alguns campo não foram preenchidos!');
}

$pedidoDAO = new PedidoDAO();
$pedidoDAO->cadastrar($produtoID, $quantidade);

header("Location: cadastrarPedido.php");
exit();
?>