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
        $this->textoCareTake->adicionarMemento(new TextoMenento($this->texto));
        $this->texto .= $texto;
    }

    public function desfazerEscrita()
    {
        $this->texto = $this->textoCareTake->retornarUltimoEstadoSalvo()->getTexto();
    }

    public function retornarTexto() : string 
    {
        return $this->texto;
    }
}
