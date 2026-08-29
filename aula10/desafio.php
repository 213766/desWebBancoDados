<?php

    $produto = "Maçã";
    $preco = 8.79;

    $conn = mysqli_connect('localhost', 'root', '', 'ua10');

    $sql = "INSERT INTO produtos (descricao_produto, preco_produto) VALUES (?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "sd", $produto, $preco);
 
    mysqli_stmt_execute($stmt);

?>