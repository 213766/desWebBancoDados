<?php
    $dtVenda = $_POST['dataVenda'];
    $vendedor = $_POST['crachaVendedor'];
    $idProdutos = $_POST['idProduto'];
    $quantidades = $_POST['quantidade'];

    include_once('../../_conexao.php');
    $conexao = conectaBD();

    $sql = "INSERT INTO VENDA (dt, crachaVendedor)
        VALUES ('$dtVenda',$vendedor)
    ";

    mysqli_query($conexao, $sql);

    $idVenda = mysqli_insert_id($conexao);

    for ($i = 0; $i < count($idProdutos); $i++) {

        $idProduto = $idProdutos[$i];
        $quantidade = $quantidades[$i];

        $sql = "INSERT INTO PRODUTO_VENDA (idVenda, id, quantidade)
            VALUES ($idVenda,$idProduto,$quantidade)
        ";

        mysqli_query($conexao, $sql);

    };

    echo "Venda Adicionada<br><br>";
    echo "<a href='../vendaSelect.php'>Voltar Para Lista de Vendas</a>";
?>