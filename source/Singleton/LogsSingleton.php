<?php

namespace Singleton;

class LogsSingleton
{
    /**
     * @var self $instancia Instanicia da classe de logs.
     */
    protected static $instancia;

    private function __construct() {}

    private function __clone() {}
    
    private function __wakeup() {}
        
    public static function obterInstancia() : self
    {
        if (empty($instancia)) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function gravarLog(array $dados)
    {
        $nomeArquivo = 'logs.txt';
        $logsAnteriores = [];
        if (filesize($nomeArquivo) > 0) {
            $conteudoDoArquivo = file_get_contents($nomeArquivo);
            $logsAnteriores = json_decode($conteudoDoArquivo, true);
        }

        $logsAnteriores[] = $dados;
        $arquivo = fopen($nomeArquivo, 'w');

        fwrite($arquivo, json_encode($logsAnteriores));
        fclose($arquivo);
    }
}