<?php
$servidor = "localhost";
$usuario = "root";
$senha = "root";
$banco = "cadastro_alunos";
$port=3307;

$conexao = new mysqli($servidor, $usuario, $senha, $banco, $port);

if ($conexao->connect_error) {
    die("Erro na conexao: " . $conexao->connect_error);
}
?>