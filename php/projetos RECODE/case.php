<?php
       $diasemana = "2"; 
        
        switch($diasemana) 
        { 
            case"0": $diasemana = "Domingo"; break; 
            case"1": $diasemana = "Segunda Feira"; break; 
            case"2": $diasemana = "Terça Feira"; break; 
            case"3": $diasemana = "Quarta Feira"; break; 
            case"4": $diasemana = "Quinta Feira"; break; 
            case"5": $diasemana = "Sexta Feira"; break; 
            case"6": $diasemana = "Sabado"; break; 
        } 
       
    echo $diasemana; 
?>