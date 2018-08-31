<?php

namespace Observer;

class ControleRequisicoesCompraObserver implements Observer
{
    public function atualizado(string $codigo)
    {
        $this->adicionaListaRequisicaoCompra($codigo);
    }
    //atualizarEstoqueProduto
    public function adicionaListaRequisicaoCompra(string $codigoProduto)
    {
        echo "Produto acionado à lista de requisições de compra<br>";
    }
}