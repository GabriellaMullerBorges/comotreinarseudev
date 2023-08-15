<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbName = 'comotreinarseudev';

$conexao = new mysqli($dbHost, $dbUsername, $dbName);

if ($conexao->connect_errno) {
    echo "Erro";
} else {
    echo "Sucesso";
}

?>
