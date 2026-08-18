<?php
  // Soma dos valores de um array
  $valores = array(6,1,8,10,20,5);

  // mostra os valores do array
  foreach($valores as &$i){
	    echo("$i"."</br>");
  }

  // somar os elementos do Array
   $soma = array_sum($valores);
   echo "Soma do array => $soma"."<br/> <br/>";

  // -----------------------------
  // Randômico
  // $valores = array(6,1,8,10);

  // mostra os valores do array
  // foreach($valores as &$i){
  //     echo("$i"."</br>");
  // }

 // sortear um elemento do Array
    $sorteio = array_rand($valores, 1);
    echo "Valor sorteado: $valores[$sorteio]"."<br/>";

 // -----------------------------
 // Ordem crescente e decrescente
  // $valores = array(6,1,8,10);

    echo "</br> Array em ordem crescente <br/>";
    sort($valores); // função que coloca em ordem crescente o array

    foreach($valores as &$i){
      	echo("$i"."</br>");     }

    echo "</br> Array em ordem decrescente <br/>";
    rsort($valores);  // função que coloca em ordem decrescente o array

    foreach($valores as &$i){
      	echo("$i"."</br>");  }
?>
