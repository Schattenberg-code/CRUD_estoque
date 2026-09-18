<?php

include ("../infra/conexao.php");

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descreicao = $_POST["descreicao"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$dataValidade = $_POST["dataValidade"];

if(!$nome){
    header("location: ../index.php");
    die("erro");
}

$sql = "INSERT INTO Produtos (nome, categoria, descricao, preco, quantidade, dataValidade) VALUES (?,?,?,?,?,?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sssDii", $nome, $categoria, $descricao, $preco, $quantidade, $dataValidade);
$stmt->execute();

header("location: ../home.php");