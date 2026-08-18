<?php
   $localizar = $_POST['codigo'];
   if(strpos(file_get_contents("produtos.txt"), $localizar) !== false) {
        echo "tem </br>";
        $arq = fopen("produtos.txt", "r");
        if ($arq) {
            while (!feof ($arq)) {
                $linha = fgets($arq, 90);//qtd de bytes por linha, daí quebra de linha
                $resultado = explode(",", $linha);

                if ($resultado[0] == $localizar) {
                    print_r($resultado[0]);
                    echo "</br>";
                    print_r($resultado[1]);
                    echo "</br>";
                    print_r($resultado[2]);
                    echo "</br>";
                };
            }
        }

        fclose($arq);
   } else{
        echo "não tem";
   }
?>
