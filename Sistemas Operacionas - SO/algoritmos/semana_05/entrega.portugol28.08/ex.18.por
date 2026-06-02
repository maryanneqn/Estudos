programa {
  const real percentual_desconto = 0.15
  cadeia nome
  real preco, desconto, final
  funcao inicio() {
    escreva("Nome do produto: ")
    leia(nome)
    escreva("Preço original: ")
    leia(preco)

    desconto = preco * percentual_desconto
    final = preco - desconto

    escreva("--- Preço Promocional ---\n")
    escreva("Produto: ", nome, "\n")
    escreva("Preço Original: ", preco, "\n")
    escreva("Desconto (15.0%): ", desconto, "\n")
    escreva("Preço Final: ", final)
  }
}
