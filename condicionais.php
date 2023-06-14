<?php
    #Condições
    #Tradicional IF

    $idade = 15;

    if($idade >= 18){
        echo("É maior de idade");
    }
    else{
        echo("É menor de idade<br>");
    }

    echo("<br><br>");
    #Condicional LINDA
    $idade2= 18;
    //? serve para mostrar que finalizou
    echo($idade2 >= 18?"É maior de idade": "Menor de idade");

    // || OU
    // && E

    
?>