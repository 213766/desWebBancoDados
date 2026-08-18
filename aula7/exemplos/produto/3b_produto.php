<?php
   $dados ="";
   $dados .= $_POST["cod"].",";
   $dados .= $_POST["nome"].",";
   $dados .= $_POST["valor"].",";
   $dados .= $_POST["per"];
   $dados .= PHP_EOL;  // EOL significa End Of Line, a quebra
                       // de linha código-fonte
   echo $dados;    echo "<BR/>";
   $fp = fopen("produtos.txt", "a+");
   fwrite($fp, $dados); // grava no arquivo
   echo"Gravando no arquivo....";
   fclose($fp);
?>
