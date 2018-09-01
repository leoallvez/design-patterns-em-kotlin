<?php 

namespace Strategy;

class ComprimirTar extends CompressaoStrategy
{
    public function comprimir(string $caminhoArquivo) : bool
    {
        echo 'Arquivo comprimido no formato ".TAR"';
        return true;
    }
}