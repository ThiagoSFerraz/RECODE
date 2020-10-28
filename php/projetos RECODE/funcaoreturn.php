<?php
    function soma($v1, $v2)
    {
        $somaval = $v1 + $v2;
        return $somaval;
    }

    $num1 = 10;
    $num2 = 12;
    echo ("o resultado da soma é: "). soma($num1, $num2);
    echo "<br><br><br>";


    function mult($n1, $n2)
    {
        $multval = $n1 * $n2;
        return $multval;
    }
    $n1 = 22;
    $n2 = 2009;
    echo ("O resultado da multiplicação é: "). mult($n1, $n2);
    echo "<br><br><br>";

?>
