let valorTotal = 0;
limpar()

function adicionar(){ 

    let produto = document.getElementById('produto').value
    let quantidade = document.getElementById('quantidade').value
    let vUnitario = produto.split("R$")[1]
    let nProduto = produto.split("R$")[0]
    let vParcial = quantidade * vUnitario
    
 
    let produtosCarrinho = document.getElementById('lista-produtos')
    produtosCarrinho.innerHTML = produtosCarrinho.innerHTML +  
    `<section class="carrinho__produtos__produto">
          <span class="texto-azul">${quantidade}x</span> ${nProduto} <span class="texto-azul">R$${vParcial}</span>
        </section> `
    
    valorTotal = valorTotal + vParcial;

   let campovalorTotal = document.getElementById('valor-total')  
   campovalorTotal.innerHTML = `<span class="texto-azul" id="valor-total">R$${valorTotal}</span>`;
    campovalorTotal = valorTotal
    

}

function limpar(){
    document.getElementById('lista-produtos').innerHTML= "";

    document.getElementById('valor-total').innerHTML  = `<span class="texto-azul" id="valor-total"> R$ 0 </span>`;

    document.getElementById('quantidade').value = '';

    document.getElementById('produto').value 
}





