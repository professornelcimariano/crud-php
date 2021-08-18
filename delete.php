<?php
include 'conexao.php';

$sth = $pdo->prepare('DELETE FROM alunos WHERE id_alunos = :id_alunos');

$sth->bindValue(':id_alunos', 1); // 1 é o id que será excluído

$sth->execute();

if ($sth->execute()) :
    echo "id excluído ";
else :
    echo "Registro não excluído";
endif;
