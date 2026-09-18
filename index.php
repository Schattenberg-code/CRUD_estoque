
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
            <form method="POST" name="cadastrarProduto">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <div>
                    <label for="nome">Categoria:</label>
                    <input type="text" name="nome">
                </div>
                <div>
                    <label for="nome">Descrição:</label>
                    <input type="text" name="nome">
                </div>
                <div>
                    <label for="nome">Preço:</label>
                    <input type="number" name="nome">
                </div>
                <div>
                    <label for="nome">Quantidade:</label>
                    <input type="number" name="nome">
                </div>
                <div>
                    <label for="nome">Data de validade:</label>
                    <input type="number" name="nome">
                </div>
                <br>
                <div>
                    <button name="cadastrarProduto" type="submit">Enviar</button>
                </div>
            </form>
        </div>



        <H3>Produtos cadastrados</H3>
        <?php
        include("public/listarProduto.php");
        ?>
    </main>
</body>

</html>