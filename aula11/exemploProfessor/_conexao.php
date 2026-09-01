<?php
    function conectaBD(){
        $servername = "localhost";
        $database = "bancoaula8";
        $username = "root";
        $password = "senhaRoot";

        // Criar conexão
        $conexao = mysqli_connect($servername, $username, $password, $database);

        if (!$conexao) {
            die("Conexão falhou: " . mysqli_connect_error());
        }

        return $conexao;
    }

    function desconectaBD($conexao){
        mysqli_close($conexao);
    }
?>
