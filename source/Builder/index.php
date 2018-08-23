<?php
    require_once('../autoloader.php');

    use Builder\{
        FogueteModeloIBuilder  as Apolo1,
        FogueteModeloIIBuilder as Apolo2,
        FabricaFoguetesDirector as Nasa
    };

    $montadora1 = new Nasa(new Apolo1());
    $montadora2 = new Nasa(new Apolo2());

    $montadora1->construirFoguete();
    echo $montadora1->getFoguete();

    $montadora2->construirFoguete();
    echo $montadora2->getFoguete();
