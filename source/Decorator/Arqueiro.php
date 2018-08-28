<?php

namespace Decorator;

class Arqueiro extends Personagem
{
    public function __construct()
    {
        $this->nome = "Arqueiro";
        $this->ataque = 9;
    }
}