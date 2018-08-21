<?php
require_once('../autoloader.php');

$teslaFactory = new \FactoryMethod\TeslaFactory();
$dodgeFactory = new \FactoryMethod\DodgeFactory();

try {
    $teslaModelS = $teslaFactory->criarCarro('modelo_s');
    $teslaModelX = $teslaFactory->criarCarro('modelo_x');

    $dodgeCharge = $dodgeFactory->criarCarro('changer');
    $dodgeDart = $dodgeFactory->criarCarro('dart');
} catch (\Exeption $e) {
    echo $e->getMessage();
}

echo $teslaModelS->acelerar();
echo $teslaModelS->frear();
echo $teslaModelS->trocarMarcha();
echo "<br>";

echo $dodgeCharge->acelerar();
echo $dodgeCharge->frear();
echo $dodgeCharge->trocarMarcha();
echo "<br>";

echo $teslaModelX->acelerar();
echo $teslaModelX->frear();
echo $teslaModelX->trocarMarcha();
echo "<br>";

echo $dodgeDart->acelerar();
echo $dodgeDart->frear();
echo $dodgeDart->trocarMarcha();
