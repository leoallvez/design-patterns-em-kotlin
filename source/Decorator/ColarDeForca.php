<?php 

namespace Decorator;

class ColarDeForca extends PersonagemDecorator
{
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 2;
    }
}