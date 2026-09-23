<?php

include "../infra/conexao.php";

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("Location: ../index.php");
    exit;
}

if (isset($_POST["id"]) && filter_var($_POST["id"], FILTER_VALIDATE_INT) !== false) {
    $id = $_POST["id"];

    $sql = "SELECT * FROM produtos WHERE id=?";

    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("i", $id);
    $stmt->execute();
}

$resultado = $stmt->get_result();
$produto = $resultado->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creud_estoque</title>
</head>

<body>
    <main>
        <h3>Editando produto: <?php echo $produto["nome"] ?> </h3>

        <div>
            <form action="atualizar.php" method="POST" name="cadastrarProduto">

             <input type="hidden" name="id" value="<?php echo $produto["id"] ?>">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="<?php echo $produto["nome"] ?>">
                </div>
                <div>
                    <label for="nome">Categoria:</label>
                    <input type="text" name="categoria" value="<?php echo $produto["categoria"] ?>">
                </div>
                <div>
                    <label for="nome">Descrição:</label>
                    <input type="text" name="descricao" value="<?php echo $produto["descricao"] ?>">
                </div>
                <div>
                    <label for="nome">Preço:</label>
                    <input type="number" name="preco" value="<?php echo $produto["preco"] ?>">
                </div>
                <div>
                    <label for="nome">Quantidade:</label>
                    <input type="number" name="quantidade" value="<?php echo $produto["quantidade"] ?>">
                </div>
                <div>
                    <label for="nome">Data de validade:</label>
                    <input type="number" name="dataValidade" value="<?php echo $produto["dataValidade"] ?>">
                </div>
                <br>
                <div>
                    <button name="cadastrarProduto" type="submit">Enviar</button>
                </div>
            </form>
        </div>

    </main>
</body>

</html>