<?php

$saldo = 1000;

echo "Títular: Mary Anne Quintão Nascimento\n";
echo "Saldo Atual = R$$saldo\n";

do {

echo "*****************************\n";
echo "Escolha uma opção no menu abaixo:\n";
echo "1. Consultar saldo\n";
echo "2. Sacar um valor\n";
echo "3. Depositar valor\n";
echo "4. Sair\n";
echo "*****************************\n";

$opcao = (float) fgets (STDIN);

switch ($opcao) {

    case 1:
        echo "O seu saldo disponível é R$ $saldo!\n";
        break;

    case 2:
        echo "Qual valor deseja sacar?\n";
        $saque = (float) fgets (STDIN);

        if ($saque > $saldo){
            echo "Saldo insuficiente!";
        }

        else {
            $saldo -= $saque;
            echo "O seu saldo atual é: R$ $saldo \n";
        }
        break;

    case 3:
        echo "Qual valor que você deseja depositar?\n";
        $deposito = (float) fgets (STDIN);

        if ($deposito < 0){
            echo "Valor inválido para depósito!";
        }

        else {
            $saldo += $deposito;
            echo"O seu saldo atual é: R$ $saldo\n";
        }
        break;

    case 4:
        echo "Adeus\n";
        break;
        
    default:
        echo "Opção inválida\n";
}
} while ($opcao != 4);
    


