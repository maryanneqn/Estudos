//ex001
let texto = document.querySelector("h1");
texto.textContent = "Hora do Desafio";


function ex002() {
  console.log('O botão foi clicado!');
}

function ex003() {
  alert('Eu amo js!');
}

function ex004() {
  let cidade = prompt("Escreva o nome de uma cidade brasileira:")
  alert(`Estive em ${cidade} e lembrei de você.`)
}

function ex005() {
  let numero1 = parseInt(prompt("Escreva um número inteiro:"));
  let numero2 = parseInt(prompt("Escreva outro número inteiro:"));
  let soma = (numero1 + numero2);
  alert(`A soma dos dois números que você digitou é ${soma}`);
}

function ex006() {
  console.log("Olá,mundo!")
}

function ex007() {
  let nome = document.getElementById("inputEx07").value;
  console.log(`Olá, ${nome}`)
}

function ex008() {
  let numero = document.getElementById("inputex08").value;
  let resultado = document.getElementById("resultado08")
  let dobro = (numero * 2);
  resultado.textContent = dobro;
}

function ex009() {
  let numero1 = parseInt(document.getElementById("inputNumber1").value);
  let numero2 = parseInt(document.getElementById("inputNumber2").value);
  let numero3 = parseInt(document.getElementById("inputNumber3").value);
  let resultado = document.getElementById("resultado09")
  let media = (numero1 + numero2 + numero3) / 3;
  resultado.textContent = media;
}

function ex010() {
  let numero1 = parseInt(document.getElementById("inputNumber1ex10").value);
  let numero2 = parseInt(document.getElementById("inputNumber2ex10").value);
  let resultado = document.getElementById("resultado10")
  if (numero1 > numero2) {
    resultado.textContent = numero1
  } else {
    resultado.textContent = numero2
  }
}

function ex011() {
  let numero = parseInt(document.getElementById("inputNumber1ex11").value);
  let resultado = document.getElementById("resultado11");
  let multiplicacao = numero * numero;
  resultado.textContent = multiplicacao;
}

function ex012() {
  let peso = parseFloat(document.getElementById("inputNumber1ex12").value);
  let altura = parseFloat(document.getElementById("inputNumber2ex12").value);
  let resultado = document.getElementById("resultado12");
  let imc = peso / (altura * altura);
  resultado.textContent = imc;
}


function ex013() {
  let numero = parseInt(document.getElementById("inputNumber1ex13").value);
  let fatorial = 1;

  for (let i = numero; i >= 1; i--) {
    fatorial = fatorial * i;
  }

  let resultado = document.getElementById("resultado13");
  resultado.textContent = fatorial;

}

function ex014() {
  let valorDolar = parseFloat(document.getElementById("inputNumber1ex14").value);
  let valorReal = valorDolar * 4.80

  let resultado = document.getElementById("resultado14");

  resultado.textContent = `R$ ${valorReal}`;
}

function ex015() {
  let altura = parseFloat(document.getElementById("inputNumber1ex15").value);
  let largura = parseFloat(document.getElementById("inputNumber2ex15").value);

  let area = altura * largura;
  let perimetro = (altura * 2) + (largura * 2);

  let campoArea = document.getElementById("resultado151");
  let campoPerimetro = document.getElementById("resultado152");

  campoArea.textContent = area;
  campoPerimetro.textContent = perimetro;
}

function ex016() {
  let raio = parseFloat(document.getElementById("inputNumber1ex16").value);
  let campoArea = document.getElementById("resultado161");
  let campoPerimetro = document.getElementById("resultado162")
  let pi = 3.14
  let area = pi * (raio * raio);
  let perimetro = 2 * pi * raio;

  campoArea.textContent = area;
  campoPerimetro.textContent = perimetro;
}

function ex017() {
  let numero = parseFloat(document.getElementById("inputNumber1ex17").value);
  let resultado = "";
  for (let i = 1; i <= 10; i++) {

    resultado += "Adição: "
      + numero + " + " + i + " = " + (numero + i) + "\n";

    resultado += "Subtração: "
      + numero + " - " + i + " = " + (numero - i) + "\n";

    resultado += "Multiplicação: "
      + numero + " x " + i + " = " + (numero * i) + "\n";

    resultado += "Divisão: "
      + numero + " / " + i + " = " + (numero / i).toFixed(2) + "\n\n";
  };

let campoResultado = document.getElementById("resultado17")
campoResultado.textContent = resultado;
}

function ex018() {
  let listaGenerica = [];
  console.log(listaGenerica)

}

// ex019
let linguagensDeProgramacao = ['JavaScript', 'C', 'C++', 'Kotlin', 'Python']

let campoLista = document.getElementById("resultado20")
campoLista.textContent = linguagensDeProgramacao;




function ex020(){
  
  let elemento1 = document.getElementById("input1ex20").value
  linguagensDeProgramacao.push(elemento1);
  let campoLista = document.getElementById("resultado20");
  campoLista.textContent = linguagensDeProgramacao;
}

let lista = ['Cecília','Maria Clara','Ana Alice'];

function ex021(){
  console.log(lista[0])
}

function ex022(){
  console.log(lista[1])
}

function ex023(){
  console.log(lista[2])
}

let lista24 = [];

function ex024(){
  let palavra = document.getElementById("palavra-ex24");
}