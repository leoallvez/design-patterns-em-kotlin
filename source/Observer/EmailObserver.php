<?php

namespace Observer;

class EmailOberver implements Observer
{
    public function atualizado(string $codigo)
    {
        $this->enviarEmailEstoqueZerado($codigo);
    }

    public function enviarEmailZerado(string $codigoProduto)
    {
        echo 'Email enviado para o setor de compra';
    }
}