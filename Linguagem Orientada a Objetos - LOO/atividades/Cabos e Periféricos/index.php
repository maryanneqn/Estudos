<?php

require __DIR__ . '/perifericos/layout.php';
require __DIR__ . '/perifericos/perifericos.php';
require __DIR__ . '/perifericos/teclado.php';
require __DIR__ . '/perifericos/mouse.php';
require __DIR__ . '/cabos/tipo.php';
require __DIR__ . '/cabos/cabos.php';

$meuteclado = new teclado("teclado","positivo","USB", layout::abnt2);
$meumouse = new mouse("mouse","MTek","USB");
$meucabo = new cabos("Cabo_de_Video",tipo::vga);

var_dump($meuteclado);
var_dump($meumouse);
var_dump($meucabo);