programa { 
  real nota_prova, nota_trabalho, media_semestral
  logico atingiu_media_minima
  const real media_aprovacao = 7.0
  funcao inicio() {
  escreva("Digite a nota da prova:")
  leia(nota_prova)
  escreva("Digite a nota do trabalho: ")
  leia(nota_trabalho)

  media_semestral = (nota_prova + nota_trabalho)/2

  atingiu_media_minima = (media_semestral >= media_aprovacao)

  escreva("--- Boletim Escolar ---\n")
  escreva("Nota da prova: " , nota_prova ,"\n")
  escreva("Nota do trabalho: " , nota_trabalho ,"\n")
  escreva("Atingiu a média de aprovação ", media_aprovacao, "? ", atingiu_media_minima)  
  }
}
