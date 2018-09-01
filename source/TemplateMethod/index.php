<?php

require_once('../autoloader.php');
$impostosAlimentacao = new \TemplateMethod\ImpostoAlimentacao();
$impostosVestuario = new \TemplateMethod\ImpostoVestuario();
$impostosEletronicos = new \TemplateMethod\ImpostoEletronico();
echo "Preço final de alimentação: " . $impostosAlimentacao->calculaImpostosProduto(10);
echo "<br>";
echo "Preço final de vestuário: " . $impostosVestuario->calculaImpostosProduto(10);
echo "<br>";
echo "Preço final de eletrônicos: " . $impostosEletronicos->calculaImpostosProduto(10);
echo "<br>";