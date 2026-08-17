<?php

    /*
        Desenvolva um algoritmo que calcula (e mostra) o seu IMC (Índice de Medida Corporal).
        IMC = Peso/Altura²
        $imc = $peso / ($altura * $altura);
        ou
        $imc = $peso / ($altura ^ 2);
    */

    function calImc($peso, $altura) {
        return $peso / ($altura * $altura);
    }

    $imc = calImc(76, 1.70);

    echo "$imc<br>";

    switch (true) {
        case $imc < 18.5:
            $mensagem = "Classificação: Baixo peso";
            break;
        case $imc < 24.9:
            $mensagem = "Classificação: Peso normal";
            break;
        case $imc < 29.9:
            $mensagem = "Classificação: Excesso de peso";
            break;
        case $imc < 34.9:
            $mensagem = "Classificação: obseidade de classe 1";
            break;
        case $imc < 39.9:
            $mensagem = "Classificação: obseidade de classe 2";
            break;
        case $imc >= 40.0:
            $mensagem = "Classificação: obseidade de classe 3";
            break;
    }

    echo $mensagem;

?>