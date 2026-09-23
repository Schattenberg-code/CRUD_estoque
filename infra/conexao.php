<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "crud_estoque";

$conexao = new mysqli($host, $user, $password, $db);

if ($conexao->connect_error){
    die("Erro de conexão");
}