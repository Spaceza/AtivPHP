<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["nomeProduto"])
        && isset($_POST["categoriaProduto"])
        && isset($_POST["precoProduto"])
        && isset($_POST["quantidadeProduto"])
    ) {
        $nomeProduto = $_POST["nomeProduto"];
        $categoriaProduto = $_POST["categoriaProduto"];
        $precoProduto = $_POST["precoProduto"];
        $quantidadeProduto = $_POST["quantidadeProduto"];
        echo "Nome: " . $nomeProduto . "<br>";
        echo "Categoria: " . $categoriaProduto . "<br>";
        echo "Preço: " . $precoProduto . "<br>";
        echo "Quantidade: " . $quantidadeProduto;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
</head>
<body>
    <form method="POST">
        <label for="nomeProduto">
            <p>Nome do Produto</p>
            <input name="nomeProduto" type="text" id="nomeProduto" placeholder="Nome do produto">
        </label>
        <label for="categoriaProduto">
            <p>Categoria do Produto</p>
            <input name="categoriaProduto" type="text" id="categoriaProduto" placeholder="Categoria do produto">
        </label>
        <label for="precoProduto">
            <p>Preço do Produto</p>
            <input name="precoProduto" type="number" id="precoProduto" placeholder="Preço do produto">
        </label>
        <label for="quantidadeProduto">
            <p>Quantidade do Produto</p>
            <input name="quantidadeProduto" type="number" id="quantidadeProduto" placeholder="Quantidade do produto">
        </label>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>