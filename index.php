<?php

include "infra/conexao.php";
$produtos = mysqli_query($conexao, "SELECT * FROM produtos");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creud_estoque</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <main>
        <div id="divPrincipal"
            class="w-25 p-5 pb-4 pt-5 container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded rounded-3 translate-middle">
            <form action="public/cadastrarProduto.php" method="POST" name="cadastrarProduto">
                <p class="h2 pb-3 d-flex justify-content-center">Inserir Produto</p>
                <div>
                    <label class="form-label" for="nome">Nome:</label>
                    <br>
                    <input class="form-control" type="text" name="nome" id="nome">
                </div>

                <div>
                    <label class="form-label" for="categoria">Categoria:</label>
                    <br>
                    <input class="form-control" type="text" name="categoria" id="categoria">
                </div>

                <div>
                    <label class="form-label" for="descricao">Descrição:</label>
                    <br>
                    <input class="form-control" type="text" name="descricao" id="descricao">
                </div>

                <div>
                    <label class="form-label" for="preco">Preço:</label>
                    <br>
                    <input class="form-control" type="number" name="preco" id="preco">
                </div>

                <div>
                    <label class="form-label" for="quantidade">Quantidade:</label>
                    <br>
                    <input class="form-control" type="number" name="quantidade" id="quantidade">
                </div>

                <div>
                    <label class="form-label" for="data">Data de validade:</label>
                    <br>
                    <input class="form-control" type="date" name="dataValidade" id="data">
                </div>
                <br>
                <div class="d-grid gap-2 mt-3">
                    <br>
                    <button class="btn btn-primary" name="cadastrarProduto" type="submit">Enviar</button>
                </div>
            </form>
        </div>


        <div id="secaoum">
            <div id="divSegundaria"
                class="container-sm shadow-lg p-3 mb-5 bg-body-tertiary rounded rounded-3">

                <h2 class="d-flex justify-content-center">Produtos cadastrados</h2>

                <table id="tabelaProdutos" class="d-flex justify-content-center table table-striped-columns">
                    <tr class="table-active">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Data de Validade</th>
                        <th>Opções</th>
                    </tr>

                    <?php while ($produto = mysqli_fetch_assoc($produtos)) { ?>
                        <tr>
                            <td><?= $produto["id"] ?></td>
                            <td><?= $produto["nome"] ?></td>
                            <td><?= $produto["categoria"] ?></td>
                            <td><?= $produto["descricao"] ?></td>
                            <td><?= $produto["preco"] ?></td>
                            <td><?= $produto["quantidade"] ?></td>
                            <td><?= date("d/m/Y", strtotime($produto["dataValidade"])) ?></td>

                            <td>
                                <form class="d-flex justify-content-center"
                                    action="public/excluir.php" method="POST"
                                    onsubmit="return confirm('Deseja excluir este Produto?')">

                                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">

                                    <button class="btn btn-danger" type="submit">
                                        Excluir
                                    </button>
                                </form>

                                <form class="d-flex justify-content-center"
                                    action="public/editar.php" method="POST">

                                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">

                                    <button id="botao" class="btn btn-success" type="submit">
                                        Editar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>