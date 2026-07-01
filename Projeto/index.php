<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>Cadastro de Alunos</h1>

    <form action="resultado.php" method="post">
        <input type="text" name="nome" placeholder="Nome Completo"><br>
        <input type="number" name="idade" placeholder="Idade"><br>
        <input type="email" name="email" placeholder="E-mail"><br>
        <input type="text" name="curso" placeholder="Curso"><br>

        <button type="submit">Cadastrar</button>
    </form>
</div>

</body>
</html>