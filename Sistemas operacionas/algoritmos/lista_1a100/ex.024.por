programa {
  real distancia, preco_passagem1, preco_passagem2
  funcao inicio() {
    escreva("Digite a distância que você quer percorrer em KM: ")
    leia(distancia)
    
    preco_passagem1 = distancia * 0.50
    preco_passagem2 = distancia * 0.45

    se (distancia <= 200){
      escreva("O preço da passagem é: ", preco_passagem1)
    }
    senao{
      escreva("O preço da passagem é: ", preco_passagem2)
    }
  }
}
