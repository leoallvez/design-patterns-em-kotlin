<?php
require_once('../autoloader.php');

use Decorator\{
    Mago, AnelDeFogo, ColarDeForca, EspadaMagica
};

$decorator = new Mago();

$decorator = new AnelDeFogo($decorator);
$decorator = new AnelDeFogo($decorator);
$decorator = new ColarDeForca($decorator);
$decorator = new EspadaMagica($decorator);

echo $decorator->getNome();
echo "<br>";
echo "Ataque = {$decorator->getAtaque()}";
echo "<br>";
