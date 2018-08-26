<?php
    require_once('../autoloader.php');

    use Facade\BibliotecaFacade;

    $bibliotecaFacade = new BibliotecaFacade();
    $codigoLivro = "123456";
    $cpfCliente = "12345678998";

    $enfetuouRetirada = $bibliotecaFacade->efetuarRetirada($codigoLivro, $cpfCliente);

    if ($enfetuouRetirada) {
        $bibliotecaFacade->dispararMensagem($codigoLivro, $cpfCliente, "CHAVE_API", "SENHA_API");
    }

