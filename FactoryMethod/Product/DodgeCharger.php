<?php 
namespace FactoryMethod\Product;

class DodgeCharger implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Dodge Charger\n";
    }

    public function frear()
    {
        echo "Freando Dodge Charger\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marchar Dodge Charger\n";
    }
}