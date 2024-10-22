<?php

class Maca
{
    public int $x;
    public int $y;

    public function __construct()
    {
        $this->gerarCoordenada();
    }

    public function gerarCoordenada() {
        $this->x = rand(0, 29);
        $this->y = rand(0, 14);
    }

    public function desenha() {
        echo '*';
    }
}
