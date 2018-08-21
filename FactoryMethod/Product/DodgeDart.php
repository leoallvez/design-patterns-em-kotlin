<?php 
namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Dodge Dart <br>";
    }

    public function frear()
    {
        echo "Freando Dodge Dart <br>";
    }

    public function trocarMarcha()
    {
        echo "Trocando marchar Dodge Dart <br>";
    }
}