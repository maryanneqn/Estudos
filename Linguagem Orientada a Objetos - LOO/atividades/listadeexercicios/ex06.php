<?php
$altura = $argv[1];
$peso = $argv[2];

$imc = $peso / ($altura * $altura);
$imc = round($imc, 2);

$imc = $peso / ($altura * $altura);
$imc = round($imc, 2); 

$classificacao = "";

if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    $classificacao = "Peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    $classificacao = "Sobrepeso";
} elseif ($imc >= 30 && $imc < 35) {
    $classificacao = "Obesidade Grau I";
} elseif ($imc >= 35 && $imc < 40) {
    $classificacao = "Obesidade Grau II";
} else {
    $classificacao = "Obesidade Grau III (Mórbida)";
}

echo "Com base na sua altura e peso, ser IMC é: " . $imc . "\n";
echo "Classificação: " . $classificacao;
?>