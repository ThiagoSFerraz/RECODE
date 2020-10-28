<?php
    $a = $b = 10; // $a e $b recebem o valor 10
    echo "$b <br>";
    $c = $a--; // $c recebe 10 e $a passa a ter 9
    echo "$c <br>";
    echo "$a <br>";
    $d = --$b; // $d recebe 9, valor de $b já incrementado
    echo $d;
?>