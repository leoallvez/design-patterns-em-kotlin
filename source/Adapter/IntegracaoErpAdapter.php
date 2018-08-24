<?php
namespace Adapter;

class IntegracaoErpAdapter implements IErpAdapter
{
    private $integracaoErp;

    public function __construct(IntegracaoErp $integracaoErp)
    {
        $this->integracaoErp = $integracaoErp;
    }

    public function gerarToken(string $apiKey, string $usuario) : string
    {
        return $this->integracaoErp->token($apiKey);
    }

    public function enviarPedido(Pedido $pedido, string $token) : bool
    {
        $pedidoCovertidoArray = [
            'valor_total' => $pedido->getValorTotal(),
            'codigo' => $pedido->getNumeroPedido(),
        ];

        foreach ($pedido->getProdutos() as $produto) {
            $pedidoCovertidoArray['produto'][] = $produto;
        }

        return $this->integracaoErp->pedido($pedidoCovertidoArray, $token);
    }
}