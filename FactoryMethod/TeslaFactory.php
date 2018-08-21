<?php 
namespace FactoryMethod;

use FactotyMethod\Product\{
    CarroProduct, TeslaModeloS, TesLaModeloX
};

class TeslaFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro) : CarroProduct
    {
        switch ($modeloCarro) {
            case 'modelo_x':
                return new TeslaModeloX();
            case 'modelo_s':
                return new TeslaModeloS();
            default:
                throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
                
        }
    }
}