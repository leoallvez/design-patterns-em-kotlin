<?php 
    require_once('../autoloader.php');

    use Prototype\LivroPhpPrototype;

    $compradores = [
        'Grabiel Anhaia',
        'Anderson Scherer',
        'Braian Ottoni',
    ];

    $livroPhp = new LivroPhpPrototype();
    $livroPhp->setTitulo('Pradrões de projeto em PHP 7.2');

    $livros = [];

    foreach ($compradores as $comprador) {
        # code...
        $livroComprador = clone $livroPhp;
        $livroComprador->setNomeTitular($comprador);
        $livros[] = $livroComprador;
    }

    echo "<pre style='color: #001399'>"; print_r($livros);
