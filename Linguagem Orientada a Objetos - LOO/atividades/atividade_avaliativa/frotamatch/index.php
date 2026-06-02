<?php

require __DIR__ . '/src/Model/TipoCombustivel.php';
require __DIR__ . '/src/Model/Veiculo.php';
require __DIR__ . '/src/Model/Carro.php';
require __DIR__ . '/src/Model/Onibus.php';
require __DIR__ . '/src/Services/CalculadoraDeIPVA.php';

$meuCarro = new Carro ("Fiat", "Uno", 2020, TipoCombustivel::gasolina, 5);

$meuOnibus = new Onibus ("Mercedes-Benz", "0500", 2018, TipoCombustivel::diesel, 42);

$calculadora = new CalculadoraDeIPVA();

$calculadora->incluirNoCalculo($meuCarro);
$calculadora->incluirNoCalculo($meuOnibus);

echo "Total de impostos a pagar a frota: R$ " . $calculadora->getTotal();