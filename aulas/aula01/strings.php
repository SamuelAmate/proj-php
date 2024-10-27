<?php

$frase = "Esta frase tem 29 caracteres";

#Essa função retorna a quantidade de caracteres em uma string
$numero_caracteres_total = strlen($frase);   # Retorna mas computa errado caracteres acentuados
$numero_caracteres_correto = strlen($frase); # Retorna de forma correta

#Essa função retorna os caracteres por posição a partir do 0 à 4
$primeira_palavra = substr($frase, 0, 4);    # Retorna "Esta"

#Essa função transforma todos os caracterres em maiúsculos
$maiusculos = strtoupper($frase);

#Essa função transforma todos os caracterres em minúsculos
$maiusculos = strtolower($frase);

#Essa função substitui uma letra por outra
$nova_frase = str_replace('a', 'x', $frase); # Retorna "Estx frxse tem 29 cxrxcteres"

#Essa função indica a posição de um caractere dentro da string
$locate = strpos($frase, 'a');  #Retorna "3"

#Essa função indica se a string contém alguma letra ou palavra
$cont = str_contains($frase, 'Esta'); #Retorna "True"

#Essa função indica se a string começa ou termina alguma letra ou palavra
$cont1 = str_starts_with($frase, 'Esta');       # True
$cont2 = str_starts_with($frase, 'Como');       # false
$cont3 = str_ends_with($frase, 'caracteres');   # true
$cont4 = str_ends_with($frase, 'poison');       # false
?>