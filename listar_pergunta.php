<!DOCTYPE html>
<html>
<head>
    <title>Listar uma Pergunta</title>
</head>
<body>
    <h2>Listar uma Pergunta</h2>
    <form action="listar_pergunta.php" method="GET">
        <label>Nome do Arquivo:</label><br>
        <input type="text" name="arquivo"><br><br>
        <input type="submit" value="Listar Pergunta">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $nomeArquivo = $_GET['arquivo'];
        $arquivo = "{$nomeArquivo}.txt";
        if (file_exists($arquivo)) {
            $conteudo = file_get_contents($arquivo);
            echo "<h3>$arquivo</h3>";
            echo "<pre>$conteudo</pre>";
        } else {
            echo "Pergunta não encontrada.";
        }
    }
    ?>
</body>
</html>
