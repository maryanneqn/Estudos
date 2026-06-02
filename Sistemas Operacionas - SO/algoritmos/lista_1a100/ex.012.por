programa {
  real preco_inicial, desconto, preco_desconto
  funcao inicio() {
    escreva("Escreva o preço do produto: ")
    leia(preco_inicial)
    desconto = preco_inicial * 0.05
    preco_desconto = preco_inicial - desconto
    escreva("O preço promocional desse produto, com 5% de deconto é: ",preco_desconto)

    
  }
}
