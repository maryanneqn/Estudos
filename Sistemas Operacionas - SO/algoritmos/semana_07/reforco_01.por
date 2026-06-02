programa {
  inteiro n1, n2, sobra
  logico multiplo 

  funcao inicio() {
 
    escreva("Digite o primeiro número inteiro: ")
    leia(n1)
    escreva("Digite o segundo número inteiro: ")
    leia(n2)

    sobra = (n1 % n2 )
    multiplo = sobra == 0


    escreva("O primeiro é múltiplo do segundo? ", multiplo)
    
  }
}
