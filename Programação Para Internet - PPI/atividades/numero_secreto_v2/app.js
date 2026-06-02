// let titulo = document.querySelector("h1");
// titulo.innerHTML = "Jogo do Número Secret";

// let paragrafo = document.querySelector("p");
// paragrafo.innerHTML = "Escolha um número entre 1 e 10:";

// O texto acima se tornou a função a baixo:

function exibeMensagemInicial (tag,texto){
    let campo = document.querySelector(tag);
    campo.innerHTML = texto;
}

function msgInicio(){
exibeMensagemInicial ("h1", "Jogo do Número Secreto");
exibeMensagemInicial ("p", "Escolha um número entre 1 e 10");
}

msgInicio();
numeroSecreto = gerarNumeroSecreto();

function gerarNumeroSecreto(){
    return parseInt(Math.random() * 10 + 1);
}
let tentativas = 1;
function verificarChute() {
    let chute = document.querySelector("input").value;
        if(chute == numeroSecreto){
            exibeMensagemInicial("h1", "Acertou!");
            let palavraTentativas = tentativas == 1 ? "tentativa" : "tentativas";
            let msgTentativa = `Você acertou o Número Secreto (${numeroSecreto}), com ${tentativas} ${palavraTentativas}`;
            exibeMensagemInicial("p", msgTentativa);
            document.getElementById("reiniciar").removeAttribute("disabled");
        }
        else{
            tentativas++;
            if (chute > numeroSecreto){
                exibeMensagemInicial("p","O Número Secreto é menor que o número chutado!");
            } 
            else {
                exibeMensagemInicial("p","O Número Secreto é maior que o número chutado!");
            }
            limparCampo();
        }
}

function limparCampo(){
    chute = document.querySelector("input");
    chute.value = "";
}

function novoJogo(){
    msgInicio ();
    numeroSecreto = gerarNumeroSecreto();
    tentativas = 1;
    limparCampo();
    document.getElementById("reiniciar").setAttribute("disabled" , true);
}