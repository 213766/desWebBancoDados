<?php
    // criar conexao
    include_once("_conexao.php");
    $conexao= conectaBD();

    $idmusico    = $_POST["idmusico"];
    $nome      = $_POST["nome"];
      
    $sql= "INSERT INTO musicos(idmusico, nome) 
           VALUES ({$idmusico}, '{$nome}')";
    mysqli_query($conexao,$sql) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

    mysqli_close($conexao);
?>
