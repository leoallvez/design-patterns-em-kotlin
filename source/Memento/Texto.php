<?php

namespace Memento;

class Texto
{
    protected $texto;

    protected $textoCareTake;

    public function __construct()
    {
        $this->textoCareTake = new TextoCareTaker();
        $this->texto = '';
    }

    public function escreverTexto(string $texto)
    {
        $this->textoCareTake->adicionarMemento(new TextoMemento($this->texto));
        $this->texto .= $texto;
    }

    public function desfazerEscrita()
    {
        $this->texto = $this->textoCareTake->retonarUltimoEstadoSalvo()->getTexto();
    }

    public function retornarTexto() : string 
    {
        return $this->texto;
    }
}
