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

    
    $nomeModalidade = $_POST['nomeModalidade'];
    $mensaldiade = $_POST['mensalidade'];
    $local = $_POST['local'];
    $indicacao = $_POST['indicacao'];
    $restricao = $_POST['restricao'];

    $sql = "INSERT INTO modalidades
            (nome_modalidade, mensalidade, localizacao, indicacao, restricao)
            VALUES
            ('$nomeModalidade', '$mensaldiade', '$local', '$indicacao', '$restricao')";

    $result = mysqli_query($conexao, $sql);
    if ($result) {
        echo "Modalidade cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>