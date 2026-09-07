<?php

    include_once('../_conexao.php');
    $conexao = conectaBD();

    $sql = "SELECT * FROM VENDEDOR";

    $resultado = mysqli_query($conexao, $sql);
    $vendedores = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    $sql = "SELECT * FROM PRODUTO";

    $resultado = mysqli_query($conexao, $sql);
    $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./vendaSelect.php">Voltar a Tela de Vendas</a>

    <form action="./actions/vendaInsert.php" method="post">

        <label for="dataVenda">Data Venda:</label> <input type="date" name="dataVenda">
        <label for="crachaVendedor">Vendedor:</label>
        <select name="crachaVendedor">
            <option value="" disabled selected>Vendedor</option>
            <?php foreach ($vendedores as $vendedor) { ?>
                <option value=<?= $vendedor['cracha'] ?>><?= $vendedor['nome'] ?></option>';
            <?php }; ?>
        </select>

        <br><br>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody id="itensVenda">
                <tr>
                    <td>
                        <select name="idProduto[]">
                            <option value="" disabled selected>Produto</option>
                            <?php foreach ($produtos as $produto) { ?>
                                <option value="<?= $produto['id'] ?>">
                                    <?= $produto['descricao'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </td>
                    <td><input type="number" name="quantidade[]" min="1"></td>
                </tr>
            </tbody>
        </table>
        <button type="button" onclick="adicionarItem()">Adicionar item</button>

        <br><br>
        <button type="submit" onclick="return validar()">Registrar</button>
    </form>
</body>

<script>
    function adicionarItem() {

        const tbody = document.getElementById("itensVenda");
        const linha = document.createElement("tr");

        linha.innerHTML = `
            <td>
                <select name="idProduto[]">
                    <option value="" disabled selected>Produto</option>
                    <?php foreach ($produtos as $prdouto) { ?>
                        <option value=<?= $prdouto['id'] ?>><?= $prdouto['descricao'] ?></option>';
                    <?php }; ?>
                </select>
            </td>
            <td><input type="number" name="quantidade[]" min="1"></td>
            <td><button type="button" onclick="this.closest('tr').remove()">Remover</button></td>
        `;

        tbody.appendChild(linha);
    }

    function validar() {

        const tbody = document.getElementById("itensVenda");
        const vendedor = document.querySelector('[name="crachaVendedor"]').value;
        const dtVenda = new Date(document.querySelector('[name="dataVenda"]').value + "T00:00:00");
        const hoje = new Date();
        hoje.setHours(0, 0, 0, 0);

        if (dtVenda === "") {
            alert("Venda sem Data");
            return false;
        }

        if (dtVenda > hoje) {
            alert("Data venda para frente");
            return false;
        }

        if (vendedor === "") {
            alert("Venda sem Vendedor");
            return false;
        }

        for (const linha of tbody.children) {

            const produto = linha.querySelector('[name="idProduto[]"]').value;
            const quantidade = linha.querySelector('[name="quantidade[]"]').value;

            if (produto === "") {
                alert("Linha sem produto.");
                return false;
            }

            if (quantidade === "" || quantidade <= 0) {
                alert("Quantidade inválida.");
                return false;
            }
        }

        return true;
    }
</script>

</html>