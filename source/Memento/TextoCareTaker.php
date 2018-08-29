<?php

namespace Memento;

class TextoCareTake
{
    protected $estadosTexto = [];

    public function adicionarMenento(TextoMeneto $textoMemento)
    {
        $this->estadoTexto[] = $textoMemento;
    }

    public function retomarUltimoEstadoSalvo() : TextoMemento
    {
        if(empty($this->$estadosTexto)) {
            return null;
        }
        $textoMemento = end($this->estadosTexto);
        unset($this->estadosTexto[sizeof($this->estadosTexto - 1)]);

        return $textoMemento;
    }

    public function adicionarMemento(TextoMemento $textoMemento)
    {
        $this->estadosTexto[] = $textoMemento;
    }
}