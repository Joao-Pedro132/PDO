<?php

require_once 'ProdutoDAO.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$produtoDAO = new ProdutoDAO();

$produtoDAO->atualizarProduto($id, $nome, $quantidade, $preco);

header("Location: index.php");
exit;

?>