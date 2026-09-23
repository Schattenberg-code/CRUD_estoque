<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$dataValidade = $_POST["dataValidade"];

$stmt = $conexao->prepare(
    "UPDATE produtos
    SET nome = ?, categoria = ?, descricao = ?, preco = ?, quantidade = ?, dataValidade = ?
    WHERE id = ?"
);

$stmt->bind_param("sssiisi",$nome,$categoria,$descricao,$preco,$quantidade,$dataValidade,$id);

$stmt->execute();

header("Location: ../index.php");
exit;
?>