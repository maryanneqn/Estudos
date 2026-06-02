let amigos = [];


function adicionar() {
    let amigo = document.getElementById('nome-amigo');
    let lista = document.getElementById('lista-amigos');

    if (amigos.includes(amigo.value)  || amigo.value == ''  ){
        alert('Não é possível continuar!')
    }else{

    

    if (lista.textContent == '' ) {
        lista.textContent = amigo.value
    } else {
        lista.textContent = lista.textContent + ' , ' + amigo.value
    }

    amigos.push(amigo.value);

    amigo.value = ''
}
}

function sortear() {
    embaralha(amigos);

    let sorteio = document.getElementById('lista-sorteio');

    for (let i = 0; i < amigos.length; i++) {

        if (i == (amigos.length - 1)) {
            sorteio.innerHTML = sorteio.innerHTML + amigos[i] + '-->' + amigos[0] + '<br>'
        } else {
            sorteio.innerHTML = sorteio.innerHTML + amigos[i] + '-->' + amigos[i + 1] + '<br>'
        }
    }

document.getElementById('1').setAttribute("disabled", true);
document.getElementById('2').setAttribute("disabled", true);
    

}




function reiniciar(){
    document.getElementById('lista-amigos').textContent = '';
    document.getElementById('lista-sorteio').innerHTML = '';
    amigos = [];

    habilitar();
}


function habilitar() {
    document.getElementById("1").disabled = false;
    document.getElementById("2").disabled = false;
}


function embaralha(lista) {

    let indice = lista.length

    while (indice) {
        // atenção para o pós-incremento indice-- 
        const indiceAleatorio = Math.floor(Math.random() * indice--);
        [lista[indice], lista[indiceAleatorio]] =
            [lista[indiceAleatorio], lista[indice]];
    }
}

