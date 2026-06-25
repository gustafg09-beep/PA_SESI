<?php

include 'connection.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

try{
    $processamento = mysqli_query($conn, "INSERT INTO usuario(teste, email, senha) VALUES ('$nome', '$email', '$senha')");
    echo "Registrado com sucesso!";
}
catch(Exception $e){
    echo $e;
}