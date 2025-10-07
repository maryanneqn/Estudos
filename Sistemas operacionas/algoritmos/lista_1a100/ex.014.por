programa {
  real km, dias,total
  funcao inicio() {
    escreva("Digite a quantidade de Km percorridos: ")
    leia(km)
    escreva("Digite a quantidade de dias que ele foi alugado: ")
    leia(dias)
    total = (90 * dias) + (0.20*km)
    escreva("O valor total do aluguel do carro é: ",total)
  }
}
