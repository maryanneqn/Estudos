programa {
  real p1, p2
  logico menor, igual
  funcao inicio() {

    escreva("Preço do Produto A: ")
    leia(p1)
    escreva("Preço do Produto B: ")
    leia(p2)

    menor = p1 < p2 
    igual = p1 == p2 

    escreva("Produto A é mais barato que B? ", menor)
    escreva("Os preços são iguais? ", igual)

    
  }
}
