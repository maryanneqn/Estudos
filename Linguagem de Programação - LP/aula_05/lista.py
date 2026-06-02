numero = [2,5,10,1,4,9,22,100,3] 

print(len(numero))                    # len- tamanho da lista

print(min(numero))                    # min- menor valor

print(max(numero))                    # max- maior valor

print(sum(numero))                    # sum- soma dos valores

print(sorted(numero))                 #sorted- organiza em forma crescente

print(sorted(numero, reverse = True)) #reverse- organiza em forma decrescente

print(numero[1])                      #[numero]- mostra o numero neste indice

print(6 in numero)                    # verifica se há esse numero na lista

print(numero)

print( numero[2:8])                   # restringe a lista, mostra os numeros de 2 a 8, fatiamento, não mostra o último número

print(numero[:2])                     # mostra até o indice indicado, não mostrando o ultimo

print(numero[2:])                     # mostra os numeros a partir do indice 2

del numero[1]                         # deleta o número que está localizado no indice
print(numero)

numero.append(101)                    # acrencenta o numero apresentado no final da lista
print(numero)