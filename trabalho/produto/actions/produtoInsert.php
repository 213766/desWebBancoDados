<?php
    // criar conexao
    include_once("../../_conexao.php");
    $conexao= conectaBD();

    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
      
    $sql= "INSERT INTO produto(descricao, preco) 
        VALUES ('{$descricao}', {$preco})
    ";
    mysqli_query($conexao,$sql) or die(mysqli_error());

    mysqli_close($conexao);

    echo "Cadastro com Sucesso!<br><br>";
    echo "<a href='../produtoSelect.php'>Voltar Para Lista de Produtos</a>";
?>