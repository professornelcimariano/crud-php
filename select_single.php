<?php
include 'conexao.php';

$sth = $pdo->prepare('SELECT *FROM alunos where id_alunos = :id_alunos');
$sth->bindValue(":id_alunos", 61);
$sth->execute();
// Para trazer 1 único registro utilize a forma abaixo
$row = $sth->fetch(PDO::FETCH_ASSOC);
extract($row);

echo "<p> id: " . $id_alunos . "<p>";
echo "<p> nome: " . $nome_alunos . "<p>";
echo "<p> sobrenome: " . $sobrenome_alunos . "<p>";
