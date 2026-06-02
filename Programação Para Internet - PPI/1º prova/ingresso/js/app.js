function comprar(){
    let tipo = document.getElementById('tipo-ingresso').value;
    let quantidade = parseInt(document.getElementById('qtd').value);
    if (tipo == 'pista'){
        compraPista(quantidade)
    }else if(tipo == 'inferior'){
        compraInferior(quantidade)
    }else {
        compraSuperior(quantidade);
    };

    
};
let sub = 0
function compraPista(quantidade){
    let qtdSetor = parseInt(document.getElementById('qtd-pista').textContent);
    if (quantidade < qtdSetor){
         sub = qtdSetor - quantidade;
         document.getElementById('qtd-pista').textContent = sub;
    }else{
        alert('Quantidade insuficiente.');
    };
};

function compraSuperior(quantidade){
    let qtdSetor = parseInt(document.getElementById('qtd-superior').textContent);
    if (quantidade < qtdSetor){
         sub = qtdSetor - quantidade;
         document.getElementById('qtd-superior').textContent = sub;
    }else{
        alert('Quantidade insuficiente.');
    };
};

function compraInferior(quantidade){
    let qtdSetor = parseInt(document.getElementById('qtd-inferior').textContent);
    if (quantidade < qtdSetor){
         sub = qtdSetor - quantidade;
         document.getElementById('qtd-inferior').textContent = sub;
    }else{
        alert('Quantidade insuficiente.');
    };
};





