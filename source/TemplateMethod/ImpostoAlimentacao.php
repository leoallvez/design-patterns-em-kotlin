<?php 

namespace TemplateMethod;

class ImpostoAlimentacao extends ImpostoAbstract
{
    protected function calculaPrimeiroImpostoVariavel(float $precoProduto) : float
    {
        return $precoProduto;
    }
}