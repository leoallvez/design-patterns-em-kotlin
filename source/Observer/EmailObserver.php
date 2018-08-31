<?php

namespace Observer;

class EmailObserver implements Observer
{
    public function atualizado(string $codigo)
    {
        $this->enviarEmailEstoqueZerado($codigo);
    }

    public function enviarEmailEstoqueZerado(string $codigoProduto)
    {
        echo 'Email enviado para o setor de compra<br>';
    }
}