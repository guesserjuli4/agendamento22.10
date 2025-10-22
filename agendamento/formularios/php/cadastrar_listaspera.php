<?php
include 'conexao_banco.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomepaciente = mysqli_real_escape_string($conexao, $_POST['nomepaciente']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $servico = mysqli_real_escape_string($conexao, $_POST['servico']);

    $sql = "INSERT INTO listaspera (nomepaciente, telefone, servico) VALUES ('$nomepaciente', '$telefone', '$servico')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro na lista de espera realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar na lista de espera: " . $conexao->error;
    }

    $conexao->close();
}
?>
