<?php 
namespace Facade;

class ModuloControleClientes
{
    public function buscarCliente(string $cpfCliente) : array
    {
        //simula a busca de um cliente pelo cpf.
        return [
            'nome' => 'Grabiel Anhaia',
            'telefone' => '99999999999',
            'email' => 'grabiel@mestredev.com.br',
        ];
    }
}