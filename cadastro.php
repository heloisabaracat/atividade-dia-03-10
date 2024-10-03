<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

    $sql = "INSERT INTO alunos (nome, idade, email, curso) VALUES ('$nome', $idade, '$email', '$curso')";

    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Cadastro feito com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Ocorreu um erro: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
?>
