<?php

/*
 * Adição e subratação em Z
 */



function operacaoemz($num1,$num2) {

    $resposta = (int) (- $num1) + (+ $num2);

    return $resposta;

}

echo operacaoemz(5,1);