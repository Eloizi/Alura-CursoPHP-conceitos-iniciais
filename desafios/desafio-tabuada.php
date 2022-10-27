<?php

$numero = (int)readline('Digite um número para obter a tabuada: '); //usado para capturar um valor digitado pelo usuario em linha de comando
for ($cont = 1; $cont <= 10;){
    $total = $numero * $cont;
        echo " $numero X $cont = $total \n";
    
    $cont++;
}

