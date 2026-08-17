<?php

    /*
        Crie um algoritmo que faça a soma de 3 números
        se (if) o resultado é maior ou igual a 80 
            mostrar: “O resultado é maior ou igual que 80”
        senão (else) 
            mostrar: “O resultado é menor que 80”.
    */
    
    $num1 = 8;
    $num2 = 76;
    $num3 = 15;

    $sum = $num1 + $num2 + $num3;

    if ($sum >= 80) {
        $mensagem = "O resultado é maior ou igual que 80";
    } else {
        $mensagem = "O resultado é menor que 80";
    }

    echo $mensagem;

?>