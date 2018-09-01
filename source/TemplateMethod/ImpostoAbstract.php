<?php 

namespace TemplateMethod;

abstract class ImpostoAbstract
{
    private function calculaPrimeiroImpostoFixo(float $precoProduto) : float
    {
        return ($precoProduto * 1.3);
    }

    private function calculaSegundoImpostoFixo(float $precoProduto) : float 
    {
        return ($precoProduto * 1.1);
    }

    abstract protected function calculaPrimeiroImpostoVariavel(float $precoProduto) : float;

    public function calculaImpostosProduto(float $precoProduto) : float
    {
        $precoProduto = $this->calculaPrimeiroImpostoFixo($precoProduto);
        $precoProduto = $this->calculaSegundoImpostoFixo($precoProduto);
        $precoProduto = $this->calculaPrimeiroImpostoVariavel($precoProduto);
        $precoProduto = $this->calculaImpostoAcional($precoProduto);

        return $precoProduto;
    }

    protected function calculaImpostoAcional(float $precoProduto)
    {
        return $precoProduto - ($precoProduto * 0.1);
    }
}