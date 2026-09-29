<?php
$dbHost='localhost';
$dbUsername='root';
$dbPassword='alunolab';
$dbName='smartacademy';
$conexao=new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($conexao->connect_errno) {
    die("Erro na conexão: " . $conexao->connect_error);
}

if (isset($_POST['submit'])) {

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];

    $sql = "INSERT INTO alunos
            (nome, email, telefone, cpf)
            VALUES
            ('$nome', '$email', '$telefone', '$cpf')";

    $result = mysqli_query($conexao, $sql);
    if ($result) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>