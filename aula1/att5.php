<?php

    /*
        Crie um algoritmo que “receba” quatro notas de um estudante, 
            calcule e mostre a média das notas e a mensagem de aprovado se 
            for superior ou igual a 7.0 ou a mensagem de reprovado se for inferior a 7.0.
        mostrar também as 4 notas
        $numero = rand(0, 10);
        echo $numero;
    */
    function gerarNumero() {
        return rand(0, 10);
    };

    $nota1 = gerarNumero();
    $nota2 = gerarNumero();
    $nota3 = gerarNumero();
    $nota4 = gerarNumero();

    $somaNota = $nota1 + $nota2 + $nota3 + $nota4;
    echo "Soma notas: $somaNota";

    echo "<br>";

    $mediaNota = $somaNota / 5;
    echo "Média notas: $mediaNota";

    echo "<br>";

    if ($mediaNota >= 7.0) {
        $resultado = "Aprovado";
    } else {
        $resultado = "Reprovado";
    };
    echo "$resultado";

?>