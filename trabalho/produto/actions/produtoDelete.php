<?php
    // criar conexao
    include_once("../../_conexao.php");
    $conexao= conectaBD();

    $id = filter_input(INPUT_POST, "var_id");
    $dados= "DELETE FROM PRODUTO WHERE id = {$id}";

    mysqli_query($conexao, $dados) or die(mysqli_error());

    mysqli_close($conexao);

    echo "Excluído com Sucesso!<br><br>";
    echo "<a href='../produtoSelect.php'>Voltar Para Lista de Produtos</a>";
?>