<?php
function criarPerguntaTexto($nomeArquivo, $pergunta, $resposta) {
    $conteudo = "Pergunta: $pergunta\n";
    $conteudo .= "Resposta: $resposta";

    $arquivo = "{$nomeArquivo}.txt";
    file_put_contents($arquivo, $conteudo);

    echo "Pergunta com resposta de texto criada com sucesso.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pergunta = $_POST['pergunta'];
    $resposta = $_POST['resposta'];
    $nomeArquivo = preg_replace('/[^A-Za-z0-9]/', '', $pergunta); // Remover caracteres especiais do nome do arquivo

    criarPerguntaTexto($nomeArquivo, $pergunta, $resposta);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Criar Pergunta com Resposta de Texto</title>
</head>
<body>
    <h2>Criar Pergunta com Resposta de Texto</h2>
    <form action="criar_pergunta_texto.php" method="POST">
        <label>Pergunta:</label><br>
        <textarea name="pergunta"></textarea><br><br>
        <label>Resposta:</label><br>
        <textarea name="resposta"></textarea><br><br>
        <input type="submit" value="Criar Pergunta">
    </form>
</body>
</html>
