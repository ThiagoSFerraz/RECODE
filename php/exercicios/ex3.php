<?php
       $conta = "1";
       $n1 = 22;
       $n2 = 10;
       $r1 = ($n1 + $n2);
       $r2 = ($n1 - $n2);
       $r3 = ($n1 * $n2);
       $r4 = ($n1 / $n2); 
        switch($conta) 
        { 
            case"0": $conta = "O resultado de sua conta é: {$n1} + {$n2}  = {$r1}"; break; 
            case"1": $conta = "O resultado de sua conta é: {$n1} - {$n2}  = {$r2}"; break; 
            case"2": $conta = "O resultado de sua conta é: {$n1} * {$n2}  = {$r3}"; break; 
            case"3": $conta = "O resultado de sua conta é: {$n1} / {$n2}  = {$r4}"; break; 
        } 
       
    echo $conta; 
?>

<?php/*
  $num = '-';
  $num1 = 5;
  $num2 = 5;
  switch($num){

    case '+': $num =  $num1 + $num2; break;
    case '-': $num =  $num1 - $num2; break;
    case '*': $num =  $num1 * $num2; break;
    case '/': $num =  $num1 / $num2; break;
    case '%': $num =  $num1 % $num2; break;
  }
  echo " Este é o resultado da operação ".$num;
*/
?>
