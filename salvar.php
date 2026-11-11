<?php
require_once 'ProdutoDAO.php';

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

if (!$nome || $preco < 0 || $quantidade < 0){
    exit ("Dados inválidos!");
}

// Cria um Objeto do ProdutoDAO
$produtoDAO = new ProdutoDAO();

// Chamar o método cadastrar para fazer INSERT
$produtoDAO->cadastrar($nome, $preco, $quantidade);

header("location: cadastrar.php");
?>