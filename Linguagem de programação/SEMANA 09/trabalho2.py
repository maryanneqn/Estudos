nome = str(input("Digite seu nome: "))
idade = str(input("Digite sua idade: "))

with open ("aula.txt", "w") as arquivo:
    arquivo.write(nome)
    arquivo.write(f"\n{idade}")