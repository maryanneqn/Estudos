programa {
  real n1, n2, media
  funcao inicio() {
    escreva("Digite a primeira nota: ")
    leia(n1)
    escreva("Digite a segunda nota: ")
    leia(n2)
    media = (n1 + n2)/2
    se (media > 7) {
      escreva("O aluno teve um bom aproveitamento! ")
    }
    senao{
      escreva("O aluno não teve um bom aproveitamento! ")
    }
  }
}
