<?php

namespace Facade;

class ModuloApiSms
{
    public function gerarTokenApi(string $apiKey, string $apiPass) : string
    {
        //Simula a geração de um token através da API de envio de SMS;
        return "TOKEN_RETORNADO_API";
    }

    public function eviarSms(
        string $tokenApi,
        string $nomeRemetente,
        string $telefoneDestinatario,
        string $mensagem
    ) {
        //Sistema envio de mensagem SMS via API.
        echo "SMS enviado com sucesso.";
        return true;
    }
}