try:
    a = int(input("Digite um número: "))
except ValueError:
    print("Entrada inválida, tente novamente!")
else:
    print("Número válido!")
finally:
    print("Seu programa foi excecutado com sucesso!")