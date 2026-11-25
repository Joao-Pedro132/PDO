<?php
require_once 'ProdutoDAO.php';

$produtoDAO = new ProdutoDAO();
$arrayProdutos = $produtoDAO->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pedido</title>
</head>
<body>
    <h1>Cadastrar Pedido</h1>
    <form action="salvarPedido.php" method="POST">
        <label for="">Selecione o Produto</label>
        <select name="produto_id">
            <option value="" selected disabled>Selecione...</option>

            <!-- Foreach php -->
            <?php
                foreach($arrayProdutos as $produto){
            ?>
            <option value="<?=$produto['id']?>"><?=$produto['nome']?></option>
            <?php
                }
            ?>
        </select>
        <br>
        <label for="">Quantidade Produto</label>
        <input type="number" name="quantidade">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
