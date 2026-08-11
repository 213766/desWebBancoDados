<?php

    /*
        Crie um algoritmo para calcular a soma dos números pares entre 1 e 85
        * Dica – Utilize laço de repetição para esta atividade.
        if ($valor % 2 == 0) {
                // o número é par
        }
        Soma = 1806.
    */

    $soma = 0;

    for ($i = 1; $i <= 85; $i++) {
        if ($i % 2 == 0) {
            $soma = $soma + $i;
        };
    }

    echo "$soma"

?>