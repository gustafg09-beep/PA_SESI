<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$curso = $_POST['curso'];

if(empty($nome) || empty($idade) || empty($email) || empty($curso)){
    echo "Preencha todos os campos!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>Cadastro realizado com sucesso!</h1>

    <p>Nome: <?php echo $nome; ?></p>
    <p>Idade: <?php echo $idade; ?></p>
    <p>E-mail: <?php echo $email; ?></p>
    <p>Curso: <?php echo $curso; ?></p>

    <a href="index.php">Voltar</a>
</div>

</body>
</html>