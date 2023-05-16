    echo "<input type=\"hidden\" name=\"arquivo\" value=\"$nomeArquivo\">";
    echo "<input type=\"text\" value=\"$nomeArquivo\" disabled><br><br>";
    echo "<label>Pergunta:</label><br>";
    echo "<textarea name=\"pergunta\">$pergunta</textarea><br><br>";
    echo "<input type=\"submit\" name=\"confirmar\" value=\"Confirmar Alteração\">";
    echo "</form>";
} elseif (isset($_POST['confirmar'])) {
    // Processar o formulário de alteração
    $pergunta = $_POST['pergunta'];

    alterarPerguntaTexto($nomeArquivo, $pergunta);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Pergunta com Resposta de Texto</title>
</head>
<body>
    <h2>Selecionar Pergunta para Alterar</h2>
    <?php listarPerguntas(); ?>
    <br>
    <h2>Selecione a Pergunta a Ser Alterada</h2>
    <form action="alterar_pergunta_texto.php" method="POST">
        <label>Nome do Arquivo:</label><br>
        <input type="text" name="arquivo"><br><br>
        <input type="submit" name="alterar" value="Alterar Pergunta">
    </form>
</body>
</html>
