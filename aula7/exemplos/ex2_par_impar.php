<?php 
  $numero = 32; 
  par_impar ( $numero );
  
  # ---------------------------
  function par_impar ($valor) {
    if($valor % 2 == 0) { 
        echo "O $valor é PAR"; 
        } else { 
            echo "O $valor é IMPAR"; 
        } 
    }
 ?>
