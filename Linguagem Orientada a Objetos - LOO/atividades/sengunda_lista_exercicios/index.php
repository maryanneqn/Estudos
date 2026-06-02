<?php

$numero = $argv[1];
$nomeDaFuncao = 'ex' . $numero;

echo "========================================\n";
echo "   Executando o Exercício $numero\n";
echo "========================================\n\n";

$nomeDaFuncao(); 

echo "\n========================================\n";


// ÁREA DOS EXERCÍCIOS: Funções com a lógica de cada questão
// ==============================================================================

function ex01() {
    echo "Olá, Mundo!\n";
}

function ex02() {
    $nome = readline("Qual é o seu nome? ");
    echo "Olá $nome, é um prazer te conhecer!\n";
}

function ex03(){
    $nome = readline("Nome do funcionário: \n");
    $salario = floatval (readline("Salário: \n"));
    echo "O funcionário $nome, tem um salário de $salario, em Junho";
}

function ex04(){
    $numero1 = intval(readline("Digite um valor: \n"));
    $numero2 = intval(readline("Digite outro valor: \n"));
    $soma = $numero1 + $numero2;
    echo "A soma entre $numero1 e $numero2 é igual a $soma";
}

function ex05(){
    $nota1 = floatval(readline("Digite a primeira nota: \n"));
    $nota2 = floatval(readline("Digite a segunda nota: \n"));
    $media = ($nota1 + $nota2) / 2;
    echo "A média entre $nota1 e $nota2 é igual a $media";
}

function ex06(){
    $numero = intval(readline("Digite um número: \n"));
    
   echo "O antecessor de " . $numero . " é " . ($numero - 1) . "\n";
echo "O sucessor de " . $numero . " é " . ($numero + 1);
}

function ex07(){
    $numero = floatval(readline("Digite um número: \n"));
    $dobro = $numero * 2;
    $terca = $numero / 3; 
    echo "O dobro de $numero é $dobro\n";
    echo "A terça parte de $numero é $terca ";

}

function ex08(){
    $dmetro = floatval(readline("Digite uma distância em metros: \n"));
    echo "A distância de $dmetro corresponde a: \n";
    echo(
        $dmetro / 1000 . " km\n".
        $dmetro / 100 . " hm\n".
        $dmetro / 10 . " dam\n".
        $dmetro *10 . " dm\n" .
        $dmetro * 100 . " cm\n" .
        $dmetro * 1000 . " mm\n"

    );
    
}

function ex09(){
    define("DOLAR", 3.45);

    $real = floatval(readline("Escreva quanto de dinheiro você tem na carteira em reais: "));

    $dinheiro = $real / DOLAR;

    echo "O total do seu dinheiro em dólares é: $". number_format($dinheiro, 2);

}

function ex10(){
    $largura = floatval(readline("Escreva a largura da parede a ser pintada: "));
    $altura = floatval(readline("Escreva a altura da parede a ser pintada: "));
    $area = $largura * $altura;
    $litrosTinta = $area / 2;
    echo "A área a ser pintada é $area metros, e será necessário $litrosTinta litros para pintá-la!";
}

function ex11(){
    $valorA = floatval(readline("Escreva o valor de A da equação: "));
    $valorB = floatval(readline("Escreva o valor de B da equação: "));
    $valorC = floatval(readline("Escreva o valor de C da equação: "));

    $delta = ($valorB * $valorB) - (4 * $valorA * $valorC);

    echo "O valor de Delta é: $delta!";
}

function ex12(){
    $valorProduto = floatval(readline("Escreva o valor de um produto para saber seu valor promocional: "));
    $valorDesconto = ($valorProduto * 5)/100;
    $precoPromocional = $valorProduto - $valorDesconto;
    echo "O valor do produto com desconto de 5% é: R$$precoPromocional!";
}

function ex13(){
    $valorSalario = floatval(readline("Escreva o valor do seu salário para saber o novo valor: "));
    $valorAumento = ($valorSalario * 15) / 100;
    $novoSalario = $valorSalario + $valorAumento;
    echo "O seu novo salário, com 15% de aumento é: R$$novoSalario";
}

function ex14(){
    $km = floatval(readline("Escreva a quantidade de KM percorridos: "));
    $dias = floatval(readline("Escreva a quantidade de dias que o carro foi alugado: "));
    $precoTotal = (90 * $dias) + (0.20 * $km);
    echo "O valor total a pagar pelo aluguel do carro é: $precoTotal";
}

function ex15(){
    $diasTrabalhados = intval(readline("Escreva a quantidade de dias trabalhados em um mês: "));
    $salario = 8 * 25 * $diasTrabalhados;
    echo "O valor do seu salário é: $salario";
}

function ex16(){
    $cigarroDia = intval(readline("Escreva a qantidade de cigarros fumados por dia: "));
    $anos = intval(readline("Escreva quantos anos você já fumou: "));
    $diasfumados = $anos * 365;
    $perdaDias = $cigarroDia * 0.00694 * $diasfumados;
    echo "Você ja perdeu $perdaDias dias de vida!";
}

function ex17(){
    $velocidade = floatval(readline("Escreva a velocidade do carro: "));
    $kmSobra = $velocidade - 80;
    $valorMulta = $kmSobra * 5;
    if($velocidade > 80){
        echo "Você foi multado! E o valor da multa é R$$valorMulta!";
    }
}