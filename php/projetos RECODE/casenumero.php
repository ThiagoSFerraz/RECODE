<?php
       $num = "3"; 
        
        switch($num) 
        { 
            case 0: $num1 = $num++; break;
            case 1: $num1 = $num--; break;
            case 2: $num1 = $num + 2; break;
            case 3: $num1 = 10 - $num; break; 
        } 
       
    echo $num1; 
?>