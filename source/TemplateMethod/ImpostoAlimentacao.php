<?php 

namespace TemplateMethod;

class ImpostoAlimentacao extends ImpostoAbstract
{
    protected function calculaImpostoVariavel(float $precoProduto) : float
    {
        return $precoProduto;
    }
}