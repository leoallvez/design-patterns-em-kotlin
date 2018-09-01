<?php

namespace TemplateMethod;

class ImpostoVestuario extends ImpostoAbstract
{
    protected function calculaPrimeiroImpostoVariavel(float $precoProduto) : float
    {
        return ($precoProduto * 1.15);
    }
}