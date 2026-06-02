programa {
  real largura, altura, area, tinta
  funcao inicio() {
    escreva("Digite a largura da parede: ")
    leia(largura)
    escreva("Digite a altura da parede: ")
    leia(altura)
    area = altura * largura
    tinta = area / 2
    escreva("A área da parede é ", area, " metros quadrados e a quantidade necessária para pintar a parede é ", tinta, "litros.")
  }
}
