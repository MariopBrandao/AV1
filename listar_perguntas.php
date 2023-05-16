<!DOCTYPE html>
<html>
<head>
    <title>Listar Todas as Perguntas</title>
</head>
<body>
    <h2>Listar Todas as Perguntas</h2>
    <?php
    $perguntas = glob("*.txt");
    foreach ($perguntas as $pergunta) {
        $conteudo = file_get_contents($pergunta);
        echo "<h3>$pergunta</h3>";
        echo "<pre>$conteudo</pre>";
        echo "<hr>";
    }
    ?>
</body>
</html>
