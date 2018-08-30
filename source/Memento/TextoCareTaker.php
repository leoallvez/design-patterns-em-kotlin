<?php

namespace Memento;

class TextoCareTaker
{
    protected $estadosTexto = [];

    public function adicionarMenento(TextoMeneto $textoMemento)
    {
        $this->estadoTexto[] = $textoMemento;
    }

    public function retonarUltimoEstadoSalvo() : TextoMemento
    {
        if(empty($this->estadosTexto)) {
            return null;
        }
        $textoMemento = end($this->estadosTexto);
        unset($this->estadosTexto[sizeof($this->estadosTexto) - 1]);

        return $textoMemento;
    }

    public function adicionarMemento(TextoMemento $textoMemento)
    {
        $this->estadosTexto[] = $textoMemento;
    }
}