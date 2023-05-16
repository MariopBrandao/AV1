<?php
function criarPerguntaMultipla($nomeArquivo, $pergunta, $respostas) {
    $conteudo = "Pergunta: $pergunta\n";
    $conteudo .= "Respostas:\n";
    foreach ($respostas as $resposta) {
        $conteudo .= "- $resposta\n";
    }

    $arquivo = "{$nomeArquivo}.txt";
    file_put_contents($arquivo, $conteudo);

    echo "Pergunta com respostas de múltipla escolha criada com sucesso.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pergunta = $_POST['pergunta'];
    $respostas = explode(',', $_POST['respostas']);
    $nomeArquivo = preg_replace('/[^A-Za-z0-9]/', '', $pergunta); // Remover caracteres especiais do nome do arquivo

    criarPerguntaMultipla($nomeArquivo, $pergunta, $respostas);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Criar Pergunta com Respostas de Múltipla Escolha</title>
</head>
<body>
    <h2>Criar Pergunta com Respostas de Múltipla Escolha</h2>
    <form action="criar_pergunta_multipla.php" method="POST">
        <label>Pergunta:</label><br>
        <textarea name="pergunta"></textarea><br><br>
        <label>Respostas (separadas por vírgula):</label><br>
        <input type="text" name="respostas"><br><br>
        <input type="submit" value="Criar Pergunta">
    </form>
</body>
</html>
