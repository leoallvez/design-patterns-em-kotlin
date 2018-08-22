<?php 
namespace FactoryMethod\Product;

class DodgeCharger implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Dodge Charger <br>";
    }

    public function frear()
    {
        echo "Freando Dodge Charger <br>";
    }

    public function trocarMarcha()
    {
        echo "Trocando marchar Dodge Charger <br>";
    }
}