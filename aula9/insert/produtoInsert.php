<?php
    $server = 'localhost';
    $bd = 'bancoAula8';
    $user = 'root'; 
    $senha = 'senhaRoot';

    $conn = mysqli_connect($server,$user,$senha,$bd);
    if(!$conn){
        die('Conexão Falhou! '.mysqli_connect_error());
    };

    $codigo = $_POST['cod'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $perecivel = $_POST['per'];

    $query = "
        insert into produto(codigo,nome,valor,perecivel) 
            values ({$codigo},'{$nome}',{$valor},'{$perecivel}')
    ";

    mysqli_query($conn,$query) or die(mysqli_error());

    echo "Cadastro com Sucesso!";

    mysqli_close($conn);
?>