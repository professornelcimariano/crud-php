<?php
include 'conexao.php';

$sth = $pdo->prepare('UPDATE alunos 
    set nome_alunos = :nome_alunos, 
    sobrenome_alunos = :sobrenome_alunos 
    WHERE id_alunos = :id_alunos');

$sth->bindValue(':nome_alunos', "Maria Eduarda"); 
$sth->bindValue(':sobrenome_alunos', "Oliveira"); 
$sth->bindValue(':id_alunos', 2); // 2 é o id que será atualizado

$sth->execute();

if ($sth->execute()) :
    echo "id atualizado ";
else :
    echo "Registro não atualizado";
endif;
