programa {
  real preco, consumo, distancia, total
  funcao inicio() {
    escreva("Preço do combustível (R$/L): ")
    leia(preco)
    escreva("Consumo do carro (Km/L): ")
    leia(consumo)
    escreva("Distância da viagem (Km): ")
    leia(distancia)

    total = preco * consumo * distancia

    escreva("O custo total da viagem será de R$", total)
    
  }
}
