<?php
namespace Builder;

class FabricaFoguetesDirector
{
    protected $construtorDeFoguetes;

    public function __construct(FogueteBuilder $construtorDeFoguetes)
    {
        $this->construtorDeFoguetes = $construtorDeFoguetes;
    }

    public function getFoguete() : FogueteProduct
    {
        return $this->construtorDeFoguetes->getFoguete();
    }

    public function construirFoguete()
    {
        $this->construtorDeFoguetes->buildModelo();
        $this->construtorDeFoguetes->buildMotores();
        $this->construtorDeFoguetes->buildTanqueCombustivel();
        $this->construtorDeFoguetes->buildNumeroLugares();
    }
}