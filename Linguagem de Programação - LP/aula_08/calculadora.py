import operacoes
print("== CALCULADORA ==")
print("1- somar")
print("2- subtrair")
print("3- multiplicar")
print("4- dividir")

opcao = int(input("Escolha a operação:"))
a = float (input("Digite o primeiro número:"))
b = float (input("Digite  o segundo número:"))

if opcao == 1:
    print("resultado", operacoes.soma(a,b))
elif opcao == 2:
    print("resultado", operacoes.sub(a,b))
elif opcao == 3:
    print("resultado", operacoes.mult(a,b))
elif opcao == 4:
    print("resultado", operacoes.div(a,b))
    

    
