<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM alunos WHERE id=$id";

    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Excluído com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Erro ao excluir! " . $connection->error;
    }

    $connection->close();
}
?>
