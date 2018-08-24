<?php
namespace Adapter;

class Pedido
{
    protected $numeroPedido;

    protected $valorTotal;

    protected $produtos;

    public function addProduto(string $produto)
    {
        $this->produto[] = $produto;
        return $this;
    }

    # Getter's e Setter's aqui...
}