<?php 
namespace FactoryMethod\Product;

class TeslaModeloX implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Tesla Modelo X\n";
    }

    public function frear()
    {
        echo "Freando Tesla Modelo X\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marchar Tesla Modelo X\n";
    }
}