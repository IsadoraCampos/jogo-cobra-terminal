<?php

class Pontuacao
{
    public int $pontuacao;

    public function __construct()
    {
        $this->pontuacao = 0;
    }

    public function getPontuacao() : int
    {
        return $this->pontuacao;
    }

}