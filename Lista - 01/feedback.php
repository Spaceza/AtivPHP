<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomeCliente = isset($_POST["nomeCliente"]) ? $_POST["nomeCliente"] : '';
    $produto = isset($_POST["produto"]) ? $_POST["produto"] : '';
    $avaliacao = isset($_POST["avaliacao"]) ? $_POST["avaliacao"] : '';
    $comentario = isset($_POST["comentario"]) ? $_POST["comentario"] : '';

    echo "<p><strong>Nome do Cliente:</strong> " . ($nomeCliente) . "</p>";
    echo "<p><strong>Produto:</strong> " . ($produto) . "</p>";
    echo "<p><strong>Avaliação:</strong> " . ($avaliacao) . " estrela(s)</p>";
    echo "<p><strong>Comentário:</strong> " . ($comentario) . "</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Feedback de Produto</title>
</head>
<body>
    <h1>Deixe seu Feedback</h1>
    <form method="POST" action="feedback.php">
        <label for="nomeCliente">
            Nome do Cliente:
            <input type="text" id="nomeCliente" name="nomeCliente" required>
        </label>
        <br><br>
        <label for="produto">
            Produto:
            <select id="produto" name="produto" required>
                <option value=''>Selecione um produto</option>
                <option value='Notebook'>Notebook</option>
                <option value='Smartphone'>Smartphone</option>
                <option value='Fone de Ouvido'>Fone de Ouvido</option>
                <option value='Monitor'>Monitor</option>
            </select>
        </label>
        <br><br>
        <label>
            Avaliação:
            <input type="radio" id="estrela1" name="avaliacao" value="1" required>
            <label for="estrela1">1 estrela</label>
            <input type="radio" id="estrela2" name="avaliacao" value="2">
            <label for="estrela2">2 estrelas</label>
            <input type="radio" id="estrela3" name="avaliacao" value="3">
            <label for="estrela3">3 estrelas</label>
            <input type="radio" id="estrela4" name="avaliacao" value="4">
            <label for="estrela4">4 estrelas</label>
            <input type="radio" id="estrela5" name="avaliacao" value="5">
            <label for="estrela5">5 estrelas</label>
        </label>
        <br><br>
        <label for="comentario">
            Comentário:
            <br>
            <textarea id="comentario" name="comentario" rows="4" cols="40" required></textarea>
        </label>
        <br><br>
        <button type="submit">Enviar Feedback</button>
    </form>
</body>
</html>