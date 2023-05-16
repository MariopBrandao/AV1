<?php
function listarPerguntas() {
    $arquivos = glob("*.txt");
    if (empty($arquivos)) {
        echo "Não há perguntas cadastradas.";
        return;
    }

    echo "Perguntas existentes:<br>";
    foreach ($arquivos as $arquivo) {
        $conteudo = file_get_contents($arquivo);
        $pergunta = preg_match("/Pergunta: (.+)/", $conteudo, $matches) ? $matches[1] : "Pergunta desconhecida";
        echo "- $pergunta<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeArquivo = $_POST['arquivo'];

    if (!file_exists("$nomeArquivo.txt")) {
        echo "Pergunta não encontrada.";
        exit;
    }

    unlink("$nomeArquivo.txt");
    echo "Pergunta excluída com sucesso.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Excluir Pergunta</title>
</head>
<body>
    <h2>Selecionar Pergunta para Excluir</h2>
    <?php listarPerguntas(); ?>
    <br>
    <h2>Selecione a Pergunta a Ser Excluída</h2>
    <form action="excluir_pergunta.php" method="POST">
        <label>Nome do Arquivo:</label><br>
        <input type="text" name="arquivo"><br><br>
        <input type="submit" name="excluir" value="Excluir Pergunta">
    </form>
</body>
</html>
