<?php 
namespace FactoryMethod;

use FactoryMethod\Product\{
    CarroProduct, DodgeCharger, DodgeDart
};

class DodgeFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro) : CarroProduct
    {
        switch ($modeloCarro) {
            case 'changer':
                return new DodgeCharger();
            case 'dart':
                return new DodgeDart();
            default:
                throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
                
        }
    }
}