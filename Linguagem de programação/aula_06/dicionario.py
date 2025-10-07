pessoa = { 
    "nome": "mary",           
    "idade": 17,
    "peso": 78
}

print(pessoa)     #mostra o dicionario

print(pessoa["nome"])        #mostra apenas o nome

print(pessoa.keys())         #mostra nome, idade, peso

print(pessoa.values())       #mostra mary, 17, 80

pessoa ["altura"] = 1.68     #adiciona outro valor no dicionario
print(pessoa)

del(pessoa ["idade"])        #deleta um valor
print(pessoa)

print("nome" in pessoa)         #verifica se tem o atributo no dicionario
print(pessoa)