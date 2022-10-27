<?php

echo "\nSeja bem-vindo, responda as perguntas a baixo para saber o seu imc!\n\n";


$peso = (float)readline('Por gentileza informe a seguir o seu peso kg: ');
$altura = (float)readline('Digite também a sua altura: ');

$imc = $peso / ($altura ** 2);

if($imc < 18.5){
 echo "\nO seu imc é $imc, está abaixo do indicado!\n";
 echo "Recomendamos consultar o seu nutricionista.";

} else if($imc >= 18.5 && $imc <= 24.9){
    echo "\nO seu imc é $imc, está dentro do indicado!\n";
    echo "Meus parabéns continue assim!.";
     
    } else if($imc >= 25 && $imc <= 29.9){
        echo "\nO seu imc é $imc, está acima do indicado!\n";
        echo "Recomendamos consultar o seu nutricionista.";
        }

        echo "\n\nObrigado! Tenha um bom dia\n\n";
