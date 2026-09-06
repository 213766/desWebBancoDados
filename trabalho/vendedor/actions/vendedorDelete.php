<?php
    // criar conexao
    include_once("../../_conexao.php");
    $conexao= conectaBD();

    $cracha = filter_input(INPUT_POST, "var_cracha");
    $dados= "DELETE FROM VENDEDOR WHERE cracha = {$cracha}";

    mysqli_query($conexao, $dados) or die(mysqli_error());

    mysqli_close($conexao);

    echo "Excluído com Sucesso!<br><br>";
    echo "<a href='../vendedorSelect.php'>Voltar Para Lista de Vendedores</a>";
?>