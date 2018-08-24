<?php
namespace Adapter;

class Pedido
{
    protected $numeroPedido;

    protected $valorTotal;

    protected $produtos;

    public function addProduto(string $produto)
    {
        $this->produtos[] = $produto;
        return $this;
    }

    public function getProdutos() : array
    {
        return $this->produtos;
    }

    public function getNumeroPedido() : int
    {
        return $this->numeroPedido;
    }

    public function setNumeroPedido(int $numeroPedido) : Pedido
    {
        $this->numeroPedido = $numeroPedido;
        return $this;
    }

    public function getValorTotal() : float 
    {
        return $this->valorTotal;
    }

    public function setValorTotal(float $valorTotal) : Pedido
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }
}