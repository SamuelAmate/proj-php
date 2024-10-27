<?php

$dados = [
    0 => 10,
    'nome' => 'samuel',
    'sobrenome' => 'amate',
    10 => 10000,
    11 => 'rua de lisboa',
    12 => 'portugal'
];

#Apresentamos os dados da mesma forma, porém não é recomendado usar arrays mistas
echo $dados[0]; # "10"
echo $dados['sobrenome'];   # "amate"

?>