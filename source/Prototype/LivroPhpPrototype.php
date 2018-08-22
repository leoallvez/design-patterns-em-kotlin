<?php
namespace Prototype;

class LivroPhpPrototype extends LivroPrototype
{
    public function __construct()
    {
        $this->setAssunto('PHP');
    }

    public function __clone()
    {
        echo "Livro PHP Clonado <br>";
    }
}