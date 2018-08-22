<?php

    require_once('../autoloader.php');
    use Singleton\LogsSingleton;

    $logsSingleton = LogsSingleton::obterInstancia();
    $logsSingleton->gravarLog(['test']);

    $instancia = LogsSingleton::obterInstancia();

    if ($instancia == LogsSingleton::obterInstancia()) {
        echo 'As instâncias são exatamente as mesma!';
    }