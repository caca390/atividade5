<?php
include "conexao.php";
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$situa = $_POST['situa'];
$matricula = $_POST['matricula'];

$sql = "UPDATE funcionarios SET
        nome = '$nome',
        setor = '$setor',
        situacao = '$situa'
        WHERE matricula = '$matricula'";
        $atualizar = $pdo->prepare($sql);
        try{
            $atualizar->execute();
            if($atualizar->rowCount()>=1){
                echo "Atualizado com sucesso";
            }else{
                echo "Nada alterado";
            }    
        }catch(PDOException $erro){
            echo "Erro ao atualizar os dados";
        }
        ?>