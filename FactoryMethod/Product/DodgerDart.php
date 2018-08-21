<?php 
namespace FactoryMethod\Product;

class DodgerDart implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Dodger Dart\n";
    }

    public function frear()
    {
        echo "Freando Dodger Dart\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marchar Dodger Dart\n";
    }
}