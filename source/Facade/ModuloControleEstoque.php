<?php
namespace Facade;

class ModuloControleEstoque
{
    public function regristarRetirada(string $codigoDoLivro, int $cpfCliente) : bool
    {
        //Efetuar o registro de retirada do livro.
        return true;
    }

    public function validarEstoque(string $codigoDoLivro)
    {
        //Validar se possui no estoque.
        echo "Registro de retirada de retirada efetuado com sucesso.";
        return true;
    }
}