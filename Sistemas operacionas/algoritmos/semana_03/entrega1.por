programa {
  cadeia n1,n2            // n1 e n2 são os nomes dos produtos 1 e 2
  inteiro q1,q2          // q1 e q1 são as quantidade dos produos 1 e 2
  real p1,p2, st1,st2, t   // p1 e p2 são os preços unitario dos produtos 1 e 2 e st1, st2 são os substotais. t é o total


  funcao inicio() {
    escreva("--- Supermercado Preço Bom ---\n")
    escreva("Vamos registrar sua compra!\n")
    
    escreva("--- PRODUTO 1 ---\n")
    escreva("Digite o nome do produto: ")
    leia(n1)
    escreva("\n")
    escreva("Digite a quantidade: ")
    leia(q1)
    escreva("\n")
    escreva("Digite o preço únitário:")
    leia(p1)

     escreva("--- PRODUTO 2 ---\n")
    escreva("Digite o nome do produto: ")
    leia(n2)
    escreva("\n")
    escreva("Digite a quantidade: ")
    leia(q2)
    escreva("\n")
    escreva("Digite o preço únitário: ")
    leia(p2)

    st1 = p1*q1
    st2 = p2*q2
    t = st1 + st2

    escreva("--- RECIBO DA COMPRA ---")
    escreva("Intem: ", n1 , "\n")
    escreva("Qtde: ", q1, "| Preço Unit: R$", p1 , "| Subtotal: R$", st1)
    escreva("\n")
    escreva("Intem: ", n2 , "\n")
    escreva("Qtde: ", q2, "| Preço Unit: R$", p2 , "| Subtotal: R$", st2)
    escreva("\n")
    escreva("-------------------------\n")
    escreva("VALOR TOTAL DA COMPRA: ", t , "\n")
    escreva("-------------------------")
   
   


    





    
  }
}
