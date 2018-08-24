<?php
namespace Adapter;

/**
* @package Adapter
* @access public
*/
class IntegracaoErp
{
    public function token($apiKey)
    {
        return 'TOKEN_GERADO_VIA_API';
    }

    public function pedido($pedido, $apiKey)
    {
        return true;
    }
}
