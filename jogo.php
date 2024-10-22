<?php

require 'Cobra.php';
require 'Maca.php';

$larguraBorda = 30;
$alturaBorda = 15;
$cobra = new Cobra(10,10);
$maca = new Maca();
$cabecaCobra = [$cobra->x, $cobra->y];
$campoTotal = [];

echo PHP_EOL;
echo '----- SNAKE GAME -----' . PHP_EOL;
echo PHP_EOL;
echo '----- MENU -----' . PHP_EOL;
echo '0 - Sair do jogo' . PHP_EOL;
echo '1 - Jogar' . PHP_EOL;
$opcao = readline();


while (true) {
    if ($opcao == 0) {
        break;
    } else {
        $escolheDir = readline('Escolha a direção da cobra (WASD): ');
        $cobra->moverCobra($escolheDir);

        desenhaBorda($larguraBorda, $alturaBorda);

        for ($i = 0; $i < $larguraBorda; $i++) {
            for ($j = 0; $j < $alturaBorda; $j++) {
                $campoTotal[$i][$j] = [$larguraBorda, $alturaBorda]; //Todas as coordenadas em uma matriz
            }
        }
    }

}

function desenhaBorda($larguraBorda, $alturaBorda){
   echo str_repeat('-', $larguraBorda) . PHP_EOL;
    for ($i = 0; $i < $alturaBorda - 2; $i++) {
        echo '-' . str_repeat(' ', $larguraBorda - 2) . '-' . PHP_EOL;
    }
    echo str_repeat('-', $larguraBorda) . PHP_EOL;
}
