<?php

require 'Cobra.php';
require 'Maca.php';

$larguraBorda = 30;
$alturaBorda = 15;
$cobra = new Cobra(10,10);
$maca = new Maca();
$cabecaCobra = [$cobra->x, $cobra->y];

echo PHP_EOL;
echo '----- SNAKE GAME -----' . PHP_EOL;
echo PHP_EOL;

function desenhaBorda($larguraBorda, $alturaBorda){
   echo str_repeat('-', $larguraBorda) . PHP_EOL;
    for ($i = 0; $i < $alturaBorda - 2; $i++) {
        echo '-' . str_repeat(' ', $larguraBorda - 2) . '-' . PHP_EOL;
    }
    echo str_repeat('-', $larguraBorda) . PHP_EOL;
}
desenhaBorda($larguraBorda, $alturaBorda);






