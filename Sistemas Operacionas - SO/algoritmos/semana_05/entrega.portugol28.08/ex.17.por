programa {
  cadeia nome
  real peso_un, peso_total
  inteiro quantidade
  funcao inicio() {
    escreva("Nome do item: ")
    leia(nome)
    escreva("Peso unitário (Oz): ")
    leia(peso_un)
    escreva("Quantidade em posse: ")
    leia(quantidade)

    peso_total = peso_un * quantidade

    escreva("--- Detalhes do Item ---\n")
    escreva("Item: ", nome, "\n")
    escreva("Quantidade: ", quantidade, "\n")
    escreva("Peso Unitário: ", peso_un, " Oz\n")
    escreva("Peso Total: ", peso_total, " Oz" )
    
  }
}
