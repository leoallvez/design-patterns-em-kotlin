<?php

namespace Facade;

use Facade\{
    ModuloEmail,
    ModuloApiSms,
    ModuloControleEstoque, 
    ModuloControleCliente
};

class BibliotecaFacade
{
    public function efetuarRetirada (string $codigoLivro, string $cpfCliente) : bool
    {
        $moduloControleEstoque = new ModuloControleEstoque();

        if (!$moduloControleEstoque->validarEstoque($codigoLivro)) {
            throw new Exception("Estoque indisponível");
        }

        return $moduloControleEstoque->regristarRetirada($codigoLivro, $cpfCliente);

    }

    public function dispararMensagem (
        string $codigoLivro, 
        string $cpfCliente, 
        string $apiKey, 
        string $apiPass 
    ) : bool
    { 
        $moduloSms = new ModuloApiSms();
        $moduloControleCliente = new ModuloControleClientes();
        $moduloEmail = new ModuloEmail();
    
        $cliente = $moduloControleCliente->buscarCliente($cpfCliente);

        if ($moduloEmail->validarServidorDeEmails()) {
            $moduloEmail->enviarMensagem(
                'Biblioteca de Teste',
                $cliente['nome'],
                $cliente['email'],
                "Aluguel de livro de código '{$codigoLivro}' efetuado com sucesso!"

            );
        }
        $token = $moduloSms->gerarTokenApi ($apiKey, $apiPass);

        $moduloSms->enviarSms(
            $token, 
            'Biblioteca de Teste',
            $cliente['nome'],
            $cliente['telefone'],
            "Aluguel de livro de código {$codigoLivro} efetuado com sucesso!"
        );

        return true;
    }
}