<?php

$host = "localhost";
$user = "root";
$password = "root";
$db = "crud_estoque";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error){
    die("Erro de conexão");
}