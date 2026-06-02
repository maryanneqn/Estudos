<?php
$notaUm = $argv[1];
$notaDois = $argv[2];
$notaTres = $argv[3];

$somaNotas = $notaUm + $notaDois + $notaTres;

$mediaNotas = $somaNotas / 3;

echo "A média das três notas são: $mediaNotas";