programa {
  real peso, altura, imc
  funcao inicio() {
  escreva("Digite seu peso (kg): ")
  leia(peso)
  escreva("Digite sua altura (m): ") 
  leia(altura) 

  imc = peso / (altura * altura)

  escreva("Seu IMC é: ", imc)  
  }
}
