programa {
  cadeia nome, sexo
  real valor_compras, desconto_homem, desconto_mulher, valor_finalh, valor_finalm
  funcao inicio() {
    escreva("--- Bem-vindos à nossa loja! ---\n")
    escreva("Digite o seu nome: ")
    leia(nome)
    escreva("Digite o seu sexo (m ou f):  ")
    leia(sexo)
    escreva("Digite o valor das suas compras: ")
    leia(valor_compras)

    desconto_homem =(valor_compras * 0.05)
    desconto_mulher = (valor_compras * 0.13)
    valor_finalh = valor_compras - desconto_homem
    valor_finalm = valor_compras - desconto_mulher
    se ( sexo == "f" ){
      escreva("O valor final da compra com desconto é: ", valor_finalm)
    }
    senao{
      escreva("O valor final da compra com desconto é ", valor_finalh)
    }   
  }
}
