<?php

require_once "ProdutoDAO.php";

$idInformado = $_GET['id'];

$produtoDAO = new ProdutoDAO();
$informacoes = $produtoDAO->buscarPorId($idInformado);

if(!$informacoes){
    exit('Produto não encontrado');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$informacoes['nome']?></title>
</head>
<body>
    <main>
        <p><b>ID: <?=$informacoes['id']?></b></p>
        <p><b>ID: <?=$informacoes['nome']?></b></p>
        <p><b>ID: <?=$informacoes['preco']?></b></p>
        <p><b>Quantidade: </b></p>
        <p><?=$informacoes['quantidade']?></p>
        <a href="index.php">Voltar para Listagem de produtos</a>
    </main>
</body>
</html>