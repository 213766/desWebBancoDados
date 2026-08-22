<?php
    $valores = $_POST;

    foreach ($valores as $nomeCampo => $valor) {
        if (!is_iterable($valor)) {
            echo $nomeCampo.': '.$valor.'<br>';    
        } else {
            foreach ($valor as $estado) {
                echo $nomeCampo.': '.$estado.'<br>';
            }
        }
    }
?>