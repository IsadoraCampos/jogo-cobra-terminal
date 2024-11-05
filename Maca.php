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
        $this->x = rand(1,10);
        $this->y = rand(1,10);
    }
}