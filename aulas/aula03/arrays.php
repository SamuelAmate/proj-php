<?php

#Apresentando e modificando uma array utilizando índice

$valores = [10,20,30];
$valores[1] = 2000;       #Valores = 10,2000,30

#Também podemos adicionar valores sem preencher o índice
$valores[] = 3000;        #Valores = 10,2000,30, 3000

#Para apresentar os valores podemos utilizar echo
echo 'Os valores são: ' . $valores[0] . ' e ' . $valores[1]; #Os valores são: 10 e 2000
#ou
echo "Os valores são: $valores[2] e $valores[3]";            #Os valores são: 30 e 3000

?>