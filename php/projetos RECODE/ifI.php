<?php
    $a = 10;
    $b = 20;
    if ($a >= $b) 
    {
        $media = ($a + $b) / 2;
        $resto = $a % $b; //calcula o resto da divisão de A por B
        echo " o Valor de A é: ".$a;
        echo " o Valor de B é: ".$b;
        echo " o Valor da média é: ".$media;
        echo " O resto da divisão de A por B é: ".$resto;
    }
    else
    {
        echo "Valor de A menor que B";
    }
?>