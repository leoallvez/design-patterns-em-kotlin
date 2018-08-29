<?php

namespace Memento;

class TextoMemento
{
    protected $estadoTexto;

    public function __construct(string $estadoTexto)
    {
        $this->estadoTexto = $estadoTexto;
    }

    public function getTexto() : string 
    {
        return $this->estadoTexto;
    }
}