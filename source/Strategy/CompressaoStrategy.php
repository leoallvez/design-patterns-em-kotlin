<?php 

namespace Strategy;

abstract class CompressaoStrategy 
{
    public function renomearArquivoEmOrdem()
    {
        echo "Arquivo renomeados";
    }

    abstract public function comprimir(string $caminhoArquivo) : bool;
}