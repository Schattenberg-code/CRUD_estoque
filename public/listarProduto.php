<?php

$sql = "SELECT * FROM produtos";

$resultado = $conn->query($sql);

?>

<table>
    <thead>
        <tr>
             <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data de Validade</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($produto = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?= $produto["id"] ?></td>
                <td><?= $produto["nome"] ?></td>
                <td><?= $produto["categoria"] ?></td>
                <td><?= $produto["descricao"] ?></td>
                <td><?= $produto["preco"] ?></td>
                <td><?= $produto["quantidade"] ?></td>
                <td><?= $produto["dataValidade"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>