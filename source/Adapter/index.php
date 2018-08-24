<?php
require_once('../autoloader.php');

use Adapter\{IntegracaoErp, IntegracaoErpAdapter, Pedido};

$integracaoLegado = new IntegracaoErp();
$integracaoErpAdapter = new IntegracaoErpAdapter($integracaoLegado);

$token = $integracaoErpAdapter->gerarToken('123456', 'GABRIEL_ANHAIA');

$pedidoTeste = new Pedido();

$pedidoTeste->setValorTotal(3509.50)
    ->setNumeroPedido(123456)
    ->addProduto('IPhone X')
    ->addProduto('Carregador Sem Fio - IPhone X');

$pedidoEviadoComSucesso = $integracaoErpAdapter->enviarPedido($pedidoTeste, $token);

if ($pedidoEviadoComSucesso) {
    echo "Pedido enviado com sucesso!";
} 



