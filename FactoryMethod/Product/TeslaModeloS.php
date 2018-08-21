<?php 
namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Tesla Modelo S <br>";
    }

    public function frear()
    {
        echo "Freando Tesla Modelo S <br>";
    }

    public function trocarMarcha()
    {
        echo "Trocando marchar Tesla Modelo S <br>";
    }
}