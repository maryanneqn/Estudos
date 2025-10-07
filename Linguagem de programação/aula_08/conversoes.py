import operacoes
print("--- Conversor de medidas ---")
print("1- metros -> cm")
print("2- cm -> metro")
print("3-km -> metros")

opcao = int(input("Informe a opção que você quer para saber a conversão da medida:"))

a = float(input("Digite o valor para sabeer sua conversão:"))

if opcao == 1:
    print(operacoes.centimetros(a))
elif opcao == 2:
    print(operacoes.metros(a))
elif opcao == 3: 
    print(operacoes.metros2(a))
elif opcao == 4:
    print("Não foi possível converter seu número!")





