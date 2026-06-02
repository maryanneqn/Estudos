programa {

  inteiro ano_nascimento, idade

  funcao inicio() {
    
    escreva("Escreva o ano do seu nascimeto:")
    leia(ano_nascimento)
    
    idade = 2025 - ano_nascimento
    
    se (idade >= 16) {
      escreva("Você pode votar!")
      }
    senao { 
      escreva("Você não pode votar!")
    }
    }
}
