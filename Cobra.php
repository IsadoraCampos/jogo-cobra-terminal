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
        $this->tamanhoCobra = [[$this->x, $this->y]];
        $this->totalCobra = 0;
    }

    public function comerMaca(Cobra $cobra, Maca $maca) : void
    {
        if ($cobra->x === $maca->x && $cobra->y === $maca->y) {
            $maca->gerarCoordenada();
            $this->totalCobra += 1;
            $this->tamanhoCobra = [[$this->x, $this->y]];
        }
    }

    public function desenha(Cobra $cobra) : void
    {
        for ($i = 0; $i < count($cobra->tamanhoCobra); $i++) {
            echo '0';
        }
    }
        
        
    public function moverCobra(string $direcao) : void{
            if ($direcao == 'W' or $direcao == 'w') {
                $this->x--;
            }
            if ($direcao == 'S' or $direcao == 's') {
                $this->x++;
            }
            if ($direcao == 'A' or $direcao == 'a') {
                $this->y--;
            }
            if ($direcao == 'D' or $direcao == 'd') {
                $this->y++;
            }
        }

    public function morre(Cobra $cobra) : bool {
        for ($i = 1; $i < count($cobra->tamanhoCobra); $i++) {
            if ($cobra->tamanhoCobra[0] == $cobra->tamanhoCobra[$i]) {
                return true;
            }
        }
        return false;
    }
}

