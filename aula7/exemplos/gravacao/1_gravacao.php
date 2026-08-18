<?php
   // Se o arquivo 'dados.txt' não existe, será criado
   $fp = fopen("dados.txt", "w+");
      // w+ sobescreve
      // a+ acrescenta ao final

   // grava o texto no aqruivo
   fwrite($fp, "1-Eder \n");
   fwrite($fp, "2-Tonezer \n");

   // fechar o arquivo
   fclose($fp);

   echo"Gravação realizada com sucesso!";

?>
