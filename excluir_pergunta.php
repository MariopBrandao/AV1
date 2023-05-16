<?php
function excluirPergunta($nomeArquivo) {
    $arquivo = "{$nomeArquivo}.txt";
    if (file_exists($arquivo)) {
        unlink($arquivo);
        echo "Pergunta excluída com sucesso.";
    } else {
        echo "Pergunta não encontrada.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeArquivo = $_POST['arquivo'];

    excluirPergunta($nomeArquivo);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Excluir uma Pergunta</title>
</head>
<body>
    <h2>Excluir uma Pergunta</h2>
    <form action="excluir_pergunta.php" method="POST">
        <label>Nome do Arquivo:</label><br>
        <input type="text" name="arquivo"><br><br>
        <input type="submit" value="Excluir Pergunta">
    </form>
</body>
</html>
