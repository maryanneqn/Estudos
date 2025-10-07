nome1 = input("Digite o nome do primeiro aluno: ")
nome2 = input("Digite o nome do segundo aluno: ")
nome3 = input("Digite o nome do terceiro aluno: ")

with open ("alunos.txt", "w") as arquivo:
    arquivo.write(nome1)
    arquivo.write(f"\n {nome2}")
    arquivo.write(f"\n {nome3}")