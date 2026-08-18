<?php
    $dados = "";
    $dados .= $_POST["codigo"].",";
    $dados .= $_POST["nome"].",";
    $dados .= $_POST["comissao"].PHP_EOL;

    echo $dados."<br>";

    $f = fopen(".\dados.txt", "a+");
    fwrite($f,$dados);
    fclose($f);
?>