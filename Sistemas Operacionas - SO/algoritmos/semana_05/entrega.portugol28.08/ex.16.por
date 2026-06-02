programa {
  const cadeia magia = "poder"
  const inteiro mana = 10
  inteiro vezes
  real custo
  funcao inicio() {
    escreva("Digite a quantidade de vezes que você quer lançar essa magia: ")
    leia(vezes)

    custo = (mana * vezes)

    escreva("--- Calculadora de Custo de Mana (Magia: Poder) ---/n")
    escreva("Para lançar a magia 'Energy Beam' ",vezes, " vez(es), você gastará: ", custo, " de mana")
    
  }
}
