<?php 
namespace FactoryMethod;

use FactotyMethod\Product\{
    CarroProduct, DodgeCharger, DodgerDart
};

class DodgerFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro) : CarroProduct
    {
        switch ($modeloCarro) {
            case 'changer':
                return new DodgeCharger();
            case 'dart':
                return new DodgerDart();
            default:
                throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
                
        }
    }
}