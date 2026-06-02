<?php

require __DIR__ . '/src/Model/categotiaEletronico.php';
require __DIR__ . '/src/Model/Produto.php';
require __DIR__ . '/src/Model/Geladeira.php';
require __DIR__ . '/src/Model/Smartphone.php';
require __DIR__ . '/src/Services/CalculadoraDeFrete.php';

$minhaGeladeira = new Geladeira("LG", "2500", categoriaEletronico::eletrodomestico, 12);

$meuSmartphone = new Smartphone("Iphone" , "4000" , categoriaEletronico::telefonia, 3);

$calculadora = new CalculadoraDeFrete();

$calculadora->calcularFrete($minhaGeladeira);
$calculadora->calcularFrete($meuSmartphone);

echo "Total da taxa de envio a pagar é R$ " . $calculadora->getTotal();