<?php

namespace Strategy;

class ComprimirRar extends CompressaoStrategy
{
    public function comprimir(string $caminhoArquivo) : bool
    {
        echo 'Arquivo comprimido no formato ".RAR"';
        return true;
    }
}