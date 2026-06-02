programa {
  inteiro velocidade_carro, km_ultrapassado
  real valor_multa
  funcao inicio() {
    escreva("Digite a velocidade do carro: ")
    leia(velocidade_carro)
    km_ultrapassado = velocidade_carro - 80
    valor_multa = 5 * km_ultrapassado
    se (velocidade_carro > 80){
      escreva("Você foi multado em ",valor_multa," reais.")
      }
    senao {
      escreva("Você está na velocidade permitida!")
    }
    }
  }

