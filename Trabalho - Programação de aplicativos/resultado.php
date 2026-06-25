<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

    if (!empty($nome) && !empty($idade) && !empty($email) && !empty($curso)) {
        echo "<h2>Cadastro realizado com sucesso!</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Idade:</strong> $idade</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Curso:</strong> $curso</p>";
    } else {
        echo "<p>Por favor, preencha todos os campos.</p>";
    }
}
?>