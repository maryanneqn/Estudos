programa {
  inteiro ano
  funcao inicio() {
    escreva("Digite um ano para saber se ele é ou não bissexto: ")
    leia(ano)
    se ( ano % 4 == 0 ) {
    escreva("O ano é bissexto!")
    }
    senao {
      escreva("O ano não é bissexto!")
    } 
  }
}
