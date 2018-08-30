<?php

namespace Observer;

class ControleRequisicoesCompraObserver implements Observer
{
    public function atualizado(string $codigo)
    {
        $this->adicionaListaRequisicaoCompra($codigo);
    }

    public function adicionaListaRequisicaoCompra(string $codigoProduto)
    {
        echo "Produto acionado à lista de requisições de compra";
    }
}