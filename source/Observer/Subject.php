<?php

namespace Observer;


interface Subject
{
    public function removerObserver(Observer $observer) : bool; 

    public function adicionarObserver(Observer $observer);

    public function notificarObserver(string $codigoProduto); 
}