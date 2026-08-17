<?php

    /*
        Crie algoritmo que “receba” a idade do usuário (rand(16 a 50))
        se o usuário tiver 18 anos ou mais ele pode fazer a carteira de motorista AB, 
        caso a sua idade for maior ou igual a 21 anos mostre que ele pode fazer a carteira AB e D, 
        senão ele ainda não tem idade suficiente.
    */
    function gerarNumero() {
        return rand(16, 50);
    };

    $idade = gerarNumero();

    echo "$idade<br>";

    if ($idade > 18 && $idade < 21 ) {
        $mensagem = "pode fazer carteira AB";
    } else if ( $idade >= 21 ) {
        $mensagem = "pode fazer carteiras AB e D";
    } else {
        $mensagem = "Não pode fazer carteira";
    }

    echo "$mensagem";

?>