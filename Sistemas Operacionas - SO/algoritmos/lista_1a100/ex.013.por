programa {
  real salario_inicial, aumento, salario_aumento
  funcao inicio() {
    escreva("Digite o valor do salário: ")
    leia(salario_inicial)
    aumento = salario_inicial * 0.15
    salario_aumento = salario_inicial + aumento
    escreva("O valor do novo salário com 15% de desconto é: ", salario_aumento)
    
  }
}
