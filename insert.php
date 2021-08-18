<?php
include 'conexao.php';

$sth = $pdo->prepare('
    INSERT INTO alunos (nome_alunos, sobrenome_alunos)
    VALUES (:nome_alunos, :sobrenome_alunos)
    ');

$sth->bindValue(':nome_alunos', "Maria Eduarda");
$sth->bindValue(':sobrenome_alunos', "Mariano");

// $sth->execute();

if ($sth->execute()) :
    echo "id inserido: " . $pdo->lastInsertId();
else :
    echo "Registro não inserido na base de dados";
endif;
