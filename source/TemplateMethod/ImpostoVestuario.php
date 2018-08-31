<?php

namespace TemplateMethod;

class ImpostoVestuario extends ImpostoAbstract
{
    protected function calculaImpostoVariavel(float $precoProduto) : float
    {
        return ($precoProduto * 1.15);
    }
}