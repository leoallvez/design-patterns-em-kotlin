<?php

    require_once('../autoloader.php');

    use Strategy\{
        ComprimirRar, 
        ComprimirZip,
        ComprimirTar, 
        CompressaoContext
    };

    $strategyRar = new ComprimirRar();
    $strategyZip = new ComprimirZip();
    $strategyTar = new ComprimirTar();

    $compressaoContext = new CompressaoContext($strategyRar);
    $compressaoContext->comprimir('/CAMINHO/ARQUIVO');
    echo "<br>";

    $compressaoContext->setCommpressaoStrategy($strategyZip);
    $compressaoContext->comprimir('/CAMINHO/ARQUIVO');
    echo "<br>";

    $compressaoContext->setCommpressaoStrategy($strategyTar);
    $compressaoContext->comprimir('/CAMINHO ARQUIVO');
    echo "<br>";

