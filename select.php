<?php
include 'conexao.php';

$sth = $pdo->prepare('SELECT *FROM alunos');

$sth->execute();

foreach ($sth as $res) :
    extract($res);
    echo "<p> id: " . $id_alunos . "<p>";
    echo "<p> nome: " . $nome_alunos . "<p>";
    echo "<p> sobrenome: " . $sobrenome_alunos . "<p>";
endforeach;



