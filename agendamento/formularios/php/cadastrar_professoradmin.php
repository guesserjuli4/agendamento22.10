
<?php
include 'conexao_banco.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $cpf_professor = mysqli_real_escape_string($conexao, $_POST['cpf_professor']);
    $nome_professor = mysqli_real_escape_string($conexao, $_POST['nome_professor']);
    $telefone_professor = mysqli_real_escape_string($conexao, $_POST['telefone_professor']);
    $datanasc_professor = mysqli_real_escape_string($conexao, $_POST['datanasc_professor']);
    $especialidade = mysqli_real_escape_string($conexao, $_POST['especialidade']);
    $disciplinaservico = mysqli_real_escape_string($conexao, $_POST['disciplinaservico']);
    $gmail_professor = mysqli_real_escape_string($conexao, $_POST['gmail_professor']);

    $sql = "INSERT INTO professoradmin (cpf_professor, nome_professor, telefone_professor, datanasc_professor, especialidade, disciplinaservico, gmail_professor) VALUES ('$cpf_professor', '$nome_professor', '$telefone_professor', '$datanasc_professor', '$especialidade', '$disciplinaservico', '$gmail_professor')";

    if ($conexao->query($sql) === TRUE) {
        echo "Professor cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o professor: " . $conexao->error;
    }

    $conexao->close();
}
?>
