<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="salvar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" required>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>

        <button type="submit">Cadastrar</button>
    </form>
    <a href="index.php">Voltar para o index</a>
</body>
</html>