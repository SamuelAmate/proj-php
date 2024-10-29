<?php

$nome = 'samuel';
$idade = 15;
$nacionalidade = 'brasil';

if($idade >= 18){
    echo "Você é maior de idade";
} else {
    echo "Você é menor de idade";
}

#echo = "Você é menor de idade"

if($nacionalidade == 'brasil'){
    echo "\nVocê é brasileiro!\n";
} else {
    echo "\nVocê é estrangeiro!\n";
}

#echo = "Você é brasileiro!"

$nota = 5;

if($nota<= 2){
    echo "Nota muito baixa";
} elseif($nota<=4) {
    echo "Nota baixa";
} elseif($nota<=6){
    echo "Nota mínima suficiente";
} elseif($nota<=8){
    echo "Nota boa";
} else {
    echo "nota boa";
}

#echo = "Nota baixa"

$numero = 20;

if($numero > 10 && $numero != 30){
    echo "True";
} else {
    echo "False";
}

#echo = "True"

if($numero>0){
    if($numero >= 100){
        echo "Numero igual ou maior que 100";
    } else {
        echo "O número é positivo mas menor que 100";
    }
} else {
    echo "O número é negativo";
}

#echo = "O número é positivo mas menor que 100"

?>
