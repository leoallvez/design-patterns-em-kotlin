<?php 
namespace FactoryMethod;

use FactotyMethod\Product\CarroProduct;

interface CarroFactory
{
    public function criarCarro(string $modeloCarro) : CarroProduct;
}