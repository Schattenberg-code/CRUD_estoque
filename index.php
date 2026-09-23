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
</head>

<body>
    <main>
        <h3>Cadastro de produtos</h3>

        <div>
            <form action="public/cadastrarProduto.php" method="POST" name="cadastrarProduto">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <div>
                    <label for="nome">Categoria:</label>
                    <input type="text" name="categoria">
                </div>
                <div>
                    <label for="nome">Descrição:</label>
                    <input type="text" name="descricao">
                </div>
                <div>
                    <label for="nome">Preço:</label>
                    <input type="number" name="preco">
                </div>
                <div>
                    <label for="nome">Quantidade:</label>
                    <input type="number" name="quantidade">
                </div>
                <div>
                    <label for="nome">Data de validade:</label>
                    <input type="number" name="dataValidade">
                </div>
                <br>
                <div>
                    <button name="cadastrarProduto" type="submit">Enviar</button>
                </div>
            </form>
        </div>


        <div>
            <h2>Produtos cadastrados</h2>
            <table border=1>
                <tr>
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
                        <td><?= $produto["dataValidade"] ?></td>
                        <td>
                            <form action="public/excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                <button type="submit">Excluir</button>
                            </form>
                            <form action="public/editar.php" method="POST">
                                <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                <button type="submit">Editar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </main>
</body>

</html>