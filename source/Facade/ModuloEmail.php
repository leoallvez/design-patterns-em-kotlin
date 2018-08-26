<?php
namespace Facade;

class ModuloEmail
{
     public function gerarTokenApi(string $apiKey, string $apiPass) : string
    {
        //Simula a geração de um token através da API de envio de SMS;
        return "TOKEN_RETORNADO_API";
    }
    
    public function validarServidorDeEmails() : bool
    {
        //Valida se o servidor de emails esta fucionando.
        return true;

    }

    public function enviarMensagem(
        string $nomeRemetente,
        string $nomeDestinatario,
        string $enderecoEmailDestinatario,
        string $mensagem
    ) : bool {
        echo "Email enviado com sucesso";
        return true;
    }
}