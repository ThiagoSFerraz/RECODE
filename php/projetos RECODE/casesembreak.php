<?php
       $diasemana = "2"; 
        
        switch($diasemana) 
        { 
            case"0": $diasemana = "Domingo"; 
            case"1": $diasemana = "Segunda Feira"; 
            case"2": $diasemana = "Terça Feira"; break;
            case"3": $diasemana = "Quarta Feira"; 
            case"4": $diasemana = "Quinta Feira"; 
            case"5": $diasemana = "Sexta Feira"; 
            case"6": $diasemana = "Sabado"; 
        } 
       
    echo $diasemana; 
?>