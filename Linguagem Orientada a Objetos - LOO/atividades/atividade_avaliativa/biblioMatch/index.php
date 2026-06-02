<?php

require __DIR__ . '/src/Model/EstadoConservacao.php';
require __DIR__ . '/src/Model/MaterialDidatico.php';
require __DIR__ . '/src/Model/Livro.php';
require __DIR__ . '/src/Model/RevistaCientifica.php';
require __DIR__ . '/src/Services/VerificadorDeEmprestimos.php';

$meuLivro = new Livro ("Anne Frank", "1990", EstadoConservacao::bom, 250);

$minhaRevistaCienrifica = new RevistaCientifica("Revista", "2010", EstadoConservacao::gasto, 20);

$calculadora = new VerificadorDeEmprestimos();

$calculadora->tempoEmprestimo($meuLivro);
$calculadora->tempoEmprestimo($minhaRevistaCienrifica);

echo "Total de dias de empréstimo adquirido: " . $calculadora->getTotal();