<?php

    $lado1 = 11;
    $lado2 = 13;
    $lado3 = 12;

    if ($lado1 == $lado2 && $lado1 == $lado3) 
    {
        echo "os três lados são iguais, é um triângulo Equilátero";
    }
    elseif ($lado1 !== $lado2 && $lado1 !== $lado3 && $lado2 !== $lado3)
    {
        echo "todos os valores são diferente, você tem um triângulo Escaleno!";
        echo "Os Valores são $lado1 , $lado2 , $lado3 .";
    }
    elseif ($lado1 !== $lado2 || $lado1 !== $lado3 || $lado2 !== $lado3) 
    {
        echo "algum dos lados não são iguais, o seu triângulo é um Isóceles! ";
        echo "os valores dos lados são $lado1 , $lado2 , $lado3 ";
    }
    else
    {
        echo "Digite um número válido!";
    }
?>