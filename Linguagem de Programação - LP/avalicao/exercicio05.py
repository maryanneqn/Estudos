try:
    n1 = float(input("Digite a primeira nota: "))
    n2 = float(input("Digite a segunda nota: "))
    d = (n1/n2)
except ZeroDivisionError:
    print("Não é possível dividir por zero!")
else: 
    print(f"O resultado é: {d}")
