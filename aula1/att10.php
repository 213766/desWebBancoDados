<?php

    /*
        Crie um algoritmo para exibir uma tabuada com o valor gerado randomicamente rand(1,100)
        * Dica – Utilize laço de repetição para esta atividade.
    */

    $num = rand(1,100);

    echo "$num<br>";

    for ($i = 1; $i <= 10; $i++) {
        $res = $num * $i;
        echo "$num * $i = $res<br>";
    }

?>