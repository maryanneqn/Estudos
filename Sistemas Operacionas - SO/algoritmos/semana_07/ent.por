programa {
  const real percentual_desconto = 0.10
  cadeia nome
  real valor_produtos, valor_desconto, valor_final
  cadeia forma_pagamento 
  logico ganhou_brinde
  funcao inicio() {
    escreva("--- Sistema de Caixa da Loja ---\n")
    escreva("Nome do cliente: ")
    leia(nome)
    escreva("Valor total dos produtos: R$")
    leia(valor_produtos)
    escreva("Forma de pagamento (pix ou Cartão): ")
    leia(forma_pagamento)
    escreva("\n")
    valor_desconto = percentual_desconto * valor_produtos
    valor_final = valor_produtos - valor_desconto

    ganhou_brinde = (valor_final > 100 e forma_pagamento == "pix")

    escreva("--- Recibo para ", nome, "---\n")
    escreva("Valor dos Produtos: R$", valor_produtos,"\n")
    escreva("Desconto (10%): R$", valor_desconto,"\n")
    escreva("Valor final da compra: R$", valor_final,"\n")
    escreva("Forma de Pagamento: ", forma_pagamento,"\n")
    escreva("Cliente ganhou brinde especial? ", ganhou_brinde )

    
  }
}
