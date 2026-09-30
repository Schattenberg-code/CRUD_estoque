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
    <link rel="stylesheet" href="../style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <main>
<div id="editar"
    class="container-sm shadow-lg p-5 bg-body-tertiary rounded rounded-3">

            <form action="atualizar.php" method="POST" name="cadastrarProduto">

                <input type="hidden" name="id" value="<?php echo $produto["id"] ?>">

                <p class="h2 pb-3 d-flex justify-content-center">Editando produto <?php echo $produto["nome"] ?> </p>

                <div>
                    <label class="form-label" for="nome">Nome:</label>
                    <br>
                    <input class="form-control" type="text" name="nome" id="nome"
                        value="<?php echo $produto["nome"] ?>">
                </div>

                <div>
                    <label class="form-label" for="categoria">Categoria:</label>
                    <br>
                    <input class="form-control" type="text" name="categoria" id="categoria"
                        value="<?php echo $produto["categoria"] ?>">
                </div>

                <div>
                    <label class="form-label" for="descricao">Descrição:</label>
                    <br>
                    <input class="form-control" type="text" name="descricao" id="descricao"
                        value="<?php echo $produto["descricao"] ?>">
                </div>

                <div>
                    <label class="form-label" for="preco">Preço:</label>
                    <br>
                    <input class="form-control" type="number" name="preco" id="preco"
                        value="<?php echo $produto["preco"] ?>">
                </div>

                <div>
                    <label class="form-label" for="quantidade">Quantidade:</label>
                    <br>
                    <input class="form-control" type="number" name="quantidade" id="quantidade"
                        value="<?php echo $produto["quantidade"] ?>">
                </div>

                <div>
                    <label class="form-label" for="data">Data de validade:</label>
                    <br>
                    <input class="form-control" type="date" name="dataValidade" id="data"
                        value="<?php echo $produto["dataValidade"] ?>">
                </div>

                <div class="d-grid gap-2 mt-3">
                    <button id="botao" class=" btn btn-primary" name="editarproduto" type="submit">
                        Enviar
                    </button>
                    <br>
                    <a href="../index.php" id="botao" class=" btn btn-danger">
                        Voltar
                    </a>
                </div>

            </form>
        </div>

    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>