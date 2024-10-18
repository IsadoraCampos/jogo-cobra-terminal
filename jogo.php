<?php

$larguraBorda = 40;
$alturaBorda = 35;
$cobra = new Cobra(10,10);
$maca = new Maca();
$maca->gerarCoordenada();
$cabecaCobra = [$cobra->x, $cobra->y];

function desenhaBorda($cobra, $maca, $larguraBorda, $alturaBorda){

}

while (true) {
    desenhaBorda($cobra, $maca, $larguraBorda, $alturaBorda);
    $cobra->desenha();

    $cobra->comerMaca($cobra, $maca);

    usleep(200000); // Espera 200 milissegundos
}



