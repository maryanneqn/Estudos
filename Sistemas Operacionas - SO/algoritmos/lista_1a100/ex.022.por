programa {
  inteiro ano_nascimento, idade,falta_listamento, passou_listamento
  funcao inicio() {
    escreva("Digite o ano do seu nascimeto: ")
    leia(ano_nascimento)
    idade = 2025 - ano_nascimento
    falta_listamento = 18 - idade
    passou_listamento = idade - 18
    se (idade < 18 ){
      escreva("Faltam ", falta_listamento, " ano(s) para o alistamento militar!")
    }
    senao {
      escreva("Já se passaram ", passou_listamento, " ano(s) do alistamento militar!")
    }
    
  }
}
