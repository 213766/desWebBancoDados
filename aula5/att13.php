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

    echo "$imc"

?>