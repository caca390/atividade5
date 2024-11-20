<?php
include "conexao.php";

$nome = $_POST['nome'];
$setor = $_POST['setor'];

$sql = "INSERT INTO funcionarios
(nome, setor)VALUE('$nome', '$setor')";

$inserir = $pdo ->prepare($sql);

try{
    $inserir->execute();
    echo "Funcionario Cadastrado com Sucesso!";
}catch(PDOException $erro){
    echo "Falha ao cadastrar!".$erro->getMessage();
}

?>