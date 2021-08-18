<?php
$DATABASE = 'escola'; /* nome do banco de dados */
$HOST = 'localhost'; /* localhost é o local onde se encontra o banco de dados */
$USER = 'root'; /* usuário do banco de dados -> usuário padrão é root */
$PASS = ''; /* senha do banco de dados -> senha padrão é vazia */
$OPTIONS = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];
/* variável $OPTIONS irá receber outros parametros */
/* try catch -> tratamento de erros */
/* $pdo variável que irá receber o objeto de conexão */
/* 
new PDO (SGBD HOST; BANCO configurações, USUÁRIO, SENHA, OPÇÕES ) 
Classe PDO com os parametros de conexão
*/
try
{
    $pdo = new PDO('mysql:host='.$HOST.';dbname='.$DATABASE.';charset=utf8', $USER, $PASS, $OPTIONS);
}
catch(PDOException $e)
{
    echo $e->getMessage() . "</p>";
    die();
}

