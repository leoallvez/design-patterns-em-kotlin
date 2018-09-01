<?php

namespace Strategy;

class ComprimirZip extends CompressaoStrategy
{
    public function comprimir(string $caminhoArquivo) : bool
    {
        echo 'Arquivo comprimido no formato ".ZIP"';
        return true;
    }
}