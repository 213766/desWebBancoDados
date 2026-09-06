<?php
    // criar conexao
    include_once("../../_conexao.php");
    $conexao= conectaBD();

    $nome = $_POST["nome"];
    $comissao = $_POST["comissao"];
      
    $sql= "INSERT INTO VENDEDOR(NOME, COMISSAO) 
        VALUES ('{$nome}', {$comissao})
    ";
    mysqli_query($conexao,$sql) or die(mysqli_error());

    mysqli_close($conexao);

    echo "Cadastro com Sucesso!<br><br>";
    echo "<a href='../vendedorSelect.php'>Voltar Para Lista de Vendedores</a>";
?>