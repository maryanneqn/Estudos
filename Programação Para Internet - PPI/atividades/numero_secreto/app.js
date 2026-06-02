alert("Boas Vindas as jogo do Número Secreto!");

let numeroMaximo = prompt("Escolha o número máximo do jogo!");
let numeroSecreto = parseInt(Math.random() * numeroMaximo + 1);
let chute;
let tentativas = 1;

while (chute != numeroSecreto){

let chute = prompt (`Escolha um número entre 1 e ${numeroMaximo}!`);

    if (chute == numeroSecreto) {
        break
    } else {
        tentativas++
        if (chute > numeroSecreto) {
            alert(`O Número Secreto é menor que ${chute}`);
        } else {
            alert(`O Número Secreto é maior que ${chute}`);
        }
    }
}

// Operador Ternário
let palavraTentativas = tentativas == 1 ? `tentativa` : `tentativas`;

alert(`Você acertou o número secreto! - (${numeroSecreto}), com ${tentativas} ${palavraTentativas}!`); // Templete string