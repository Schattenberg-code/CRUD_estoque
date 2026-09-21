<?php

include ("../infra/conexao.php");

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("Location: ../index.php");
    exit;
}

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$dataValidade = $_POST["dataValidade"];

if(!$nome){
    header("location: ../index.php");
    die("erro");
}

$sql = "INSERT INTO Produtos (nome, categoria, descricao, preco, quantidade, dataValidade) VALUES (?,?,?,?,?,?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sssdii", $nome, $categoria, $descricao, $preco, $quantidade, $dataValidade);
$stmt->execute();

header("location: ../index.php");