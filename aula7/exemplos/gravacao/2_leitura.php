<?php
   //LEITURA
  $fp = fopen("dados.txt", "r");
  $texto = fread($fp, 90); // lê 90 bytes do arquivo e armazena em $texto
    fclose($fp);
    echo "Mostrando o que estava gravado no arquivo: </br>";

   $arq = fopen('dados.txt', "r");
   if ($arq) {
        while (!feof ($arq)) {
           echo fgets($arq, 90);//qtd de bytes por linha, daí quebra de linha
           echo "</br>";
        }
    }
?>
