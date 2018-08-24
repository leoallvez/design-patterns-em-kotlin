<?php
namespace Adapter;

/**
* Target: interface usada pelas classes clientes.
* @package Adapter
* @access public
*/

interface IErpAdapter
{
    public function gerarToken(string $apiKey, string $usuario) : string;

    public function enviarPedido(Pedido $pedido, string $token) : bool;
}