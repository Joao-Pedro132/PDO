<?php

require_once 'ProdutoDAO.php';

$idEnviado = $_GET["id"];

$produtoDAO = new ProdutoDAO();

$informacoes = $produtoDAO->buscarPorID($idEnviado);

if(!$informacoes){
    exit('Produto não encontrado!');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar: <?=$informacoes['nome']?></title>
</head>
<body>
    <h1>Editar Produto</h1>

    <form action="atualizar.php" method="POST">
        <label for="">Nome:</label>
        <br>
        <input type="text" name="nome" value="<?=$informacoes['nome']?>" required>
        <br><br>
        <label for="">Preço:</label>
        <br>
        <input type="number" name="preco" value="<?=$informacoes['preco']?>" required>
        <br><br>
        <label for="">Quantidade:</label>
        <br>
        <input type="number" name="quantidade" value="<?=$informacoes['quantidade']?>" required>
        <br><br>
        <input type="hidden" name="id" value="<?=$informacoes['id']?>">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>