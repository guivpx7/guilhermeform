<?php

include("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$contato = $_POST['contato'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO cadastro(nome, cpf, rg, contato, rua, bairro, numero, cidade)

VALUES('$nome','$cpf','$rg','$contato','$rua','$bairro','$numero','$cidade')";

if($conexao->query($sql) === TRUE){

    echo "Dados enviados com sucesso";

}else{

    echo "Erro";

}

?>