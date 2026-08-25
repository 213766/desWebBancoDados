<?php
    $server = 'localhost';
    $bd = 'bancoAula8';
    $user = 'root'; 
    $senha = 'senhaRoot';

    $conn = mysqli_connect($server,$user,$senha,$bd);
    if(!$conn){
        die('Conexão Falhou! '.mysqli_connect_error());
    };

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $comissao = $_POST['comissao'];

    $query = "
        insert into vendedor(codigo,nome,comissao) 
            values ({$codigo},'{$nome}','{$comissao}')
    ";

    mysqli_query($conn,$query) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

    mysqli_close($conn);
?>