<?php
namespace Builder;

class FogueteModeloIIBuilder extends FogueteBuilder
{
    public function buildTanqueCombustivel() 
    {
        $this->foguete->setLitrosCombustivel(850);
    }

    public function buildModelo()
    {
        $this->foguete->setModelo('Foguete Modelo II');
    }

    public function buildMotores()
    {
        $this->foguete->setNumeroMotores(2);
    }

    public function buildNumeroLugares()
    {
        $this->foguete->setNumeroLugares(6);
    }
}