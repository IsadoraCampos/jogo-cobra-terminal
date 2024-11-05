<?php

require 'Cobra.php';
require 'Maca.php';
require 'Pontuacao.php';

$larguraBorda = 30;
$alturaBorda = 15;
$pontuacao = new Pontuacao();
$cobra = new Cobra(5,5);
$maca = new Maca();

echo PHP_EOL;
echo '----- SNAKE GAME -----' . PHP_EOL;
echo PHP_EOL;

echo '----- MENU -----' . PHP_EOL;
echo '0 - Sair do jogo' . PHP_EOL;
echo '1 - Jogar' . PHP_EOL;
$opcao = readline("Digite sua opção: ");

function desenhaCampo($larguraBorda, $alturaBorda, Cobra $cobra, Maca $maca) {
    echo str_repeat('-', $larguraBorda) . PHP_EOL;

    for ($x = 0; $x < $alturaBorda; $x++) {
        for ($y = 0; $y < $larguraBorda; $y++) {
            if ($x == $cobra->x && $y == $cobra->y) {
                $cobra->desenha($cobra);
            } elseif ($x == $maca->x && $y == $maca->y) {
                echo '*'; //Desenhando a maçã nas coordenadas aleatórias
            } else {
                echo ' ';
            }
        }
    }

    echo str_repeat('-', $larguraBorda) . PHP_EOL;
}

while (true) {
    if ($opcao == 0) {
        break;
    } else {

        desenhaCampo($larguraBorda, $alturaBorda, $cobra, $maca);

        $escolheDir = readline('Escolha a direção da cobra (WASD): ');
        $cobra->moverCobra($escolheDir);
        $cobra->comerMaca($cobra, $maca, $pontuacao);

        if ($cobra->totalCobra == count($cobra->tamanhoCobra)) {
            array_shift($cobra->tamanhoCobra);
        }

        if ($cobra->totalCobra > count($cobra->tamanhoCobra)) {
            array_push($cobra->tamanhoCobra, $cobra->x, $cobra->y);
        }

        //Verifica se a cobra bateu nas bordas
        if ($cobra->x < 0 || $cobra->x > $alturaBorda || $cobra->y < 0 || $cobra->y > $larguraBorda) {
            echo 'Fim de Jogo!' . PHP_EOL;
            echo 'Pontuação: ' . $pontuacao->getPontuacao() . PHP_EOL;
            $opcao = 0;
        }

        if ($cobra->morre($cobra)) {
            echo 'Fim de Jogo!' . PHP_EOL;
            echo 'Pontuação: ' . $pontuacao->getPontuacao() . PHP_EOL;
            $opcao = 0;
        }
    }
}