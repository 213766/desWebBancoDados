<?php
   //LEITURA
    echo "Mostrando o que estava gravado no arquivo: </br>";

   $arq = fopen('produtos.txt', "r");
   if ($arq) {
        while (!feof ($arq)) {
           echo fgets($arq, 90);//qtd de bytes por linha, daí quebra de linha
           echo "</br>";
        }
    }
?>
