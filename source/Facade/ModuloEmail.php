<?php
namespace Facade;

class ModuloEmail
{
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