<?php

function imprimirDatas($dataInicial, $dataFinal) {
    while ($dataInicial <= $dataFinal) {
        echo $dataInicial->format('d/m/Y')."<br>";

        $dataInicial->add(new DateInterval('P1D'));
    }
}

imprimirDatas(new DateTime("2026-01-01"), new DateTime("2026-08-01"));

?>