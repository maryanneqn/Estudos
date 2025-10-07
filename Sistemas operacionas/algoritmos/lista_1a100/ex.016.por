programa {
  inteiro cigarros_dias, anos_fumando, dias_total, cigarros_total, minutos_perdidos, dias_perdidos
  funcao inicio() {
    escreva("Digite a quantidade de cigarros que você fuma por dia: ")
    leia(cigarros_dias)
    escreva("Digite quantos anos vocÊ já fumou: ")
    leia(anos_fumando)
    dias_total = 365 * anos_fumando
    cigarros_total = cigarros_dias * dias_total 
    minutos_perdidos = cigarros_total * 10
    dias_perdidos = minutos_perdidos / 1440
    escreva("O total de vida que você perdeu é: ", dias_perdidos, " dias.")
  }
}
