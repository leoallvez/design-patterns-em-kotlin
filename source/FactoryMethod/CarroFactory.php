<?php 
namespace FactoryMethod;

use FactoryMethod\Product\CarroProduct;

interface CarroFactory
{
    public function criarCarro(string $modeloCarro) : CarroProduct;
}