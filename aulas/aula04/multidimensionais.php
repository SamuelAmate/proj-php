<?php

$dados = [
    [10, 20, 30, 40],
    [100, 200, 300, 400],
    [1000, 2000, 3000, 4000]
];

#Apresentamos os dados desta maneira:
echo $dados[1][2]; # "300"
echo $dados[0][3]; # "40"

$dados2 = [
    'portugal' => ['lisboa', 'porto'],
    'brasil' => ['paulo', 'rio'],
    'espanha' => ['madri', 'espanha']
];

echo $dados2['brasil'][1]; # "rio"
echo $dados['portugal'][0]; # "lisboa"

?>