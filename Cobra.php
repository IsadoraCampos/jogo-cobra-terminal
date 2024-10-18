<?php

class Cobra
{
    public int $x;
    public int $y;
    public array $tamanhoCobra;
    public int $totalCobra;

    public function __construct(int $x,int $y)
    {
        $this->x = $x;
        $this->y = $y;
        $this->tamanhoCobra = [];
        $this->totalCobra = 1;
    }

    public function desenha() {
        for ($i = 0; $i < $this->totalCobra; $i++) {
            echo '0';
        }
    }

    public function comerMaca(Cobra $cobra, Maca $maca)
    {
        if ($cobra->x === $maca->x && $cobra->y === $maca->y) {
            $maca->gerarCoordenada();
            $maca->desenha();
            $cobra->totalCobra += 1;
        }
    }
}