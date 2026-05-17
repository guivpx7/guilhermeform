<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$banco = "formulario1";

$conexao = new mysqli($hostname, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro: " . $conexao->connect_error);
}

?>