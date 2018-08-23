<?php
namespace Builder;

class FogueteModeloIBuilder extends FogueteBuilder
{
    public function buildTanqueCombustivel() 
    {
        $this->foguete->setLitrosCombustivel(1000);
    }

    public function buildModelo()
    {
        $this->foguete->setModelo('Foguete Modelo I');
    }

    public function buildMotores()
    {
        $this->foguete->setNumeroMotores(3);
    }

    public function buildNumeroLugares()
    {
        $this->foguete->setNumeroLugares(8);
    }
}