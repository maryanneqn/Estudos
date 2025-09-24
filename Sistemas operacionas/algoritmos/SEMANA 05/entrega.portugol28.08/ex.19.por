programa {
  real v1,v2,v3, soma, media
  funcao inicio() {
    escreva("Digite o primeiro valor: ")
    leia(v1)
    escreva("Digite o segundo valor: ")
    leia(v2)
    escreva("Digite o terceiro valor: ")
    leia(v3)

    soma = v1 + v2 + v3
    media = soma/3

    escreva("--- Resultados ---\n")
    escreva("Valores: ", v1," , ",v2," , ", v3,"\n")
    escreva("Soma Total: ", soma,"\n")
    escreva("Média: ", media)


  }
}
