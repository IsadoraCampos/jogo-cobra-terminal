<?php

class Maca
{
    public int $x;
    public int $y;

    public function gerarCoordenada() {
        $this->x = rand(0, 10);
        $this->y = rand(0, 10);
    }

    public function desenha() {
        echo '*';
    }
}