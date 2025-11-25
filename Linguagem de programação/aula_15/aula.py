import pandas as pd

dados_df = pd.read_excel("produtos_ficticios.xlsx")
#print(dados_df.to_string())       #to_string mostra todas as informações da tabela
#print(dados_df.columns)             #mostra a quantidade de colunas
#print(dados_df.shape)               #mostra a quantidade de linhas e colunas

#produto = dados_df['Peso (em kg)']  #mostra a coluna especificada no colchete
#print(produto)

#roupas = dados_df.loc[dados_df['Categoria'] == 'Roupas', ['Categoria', 'Código do produto', 'Preço']] #mostra todas as categorias de roupas
#print(roupas)

#cor = dados_df.loc[dados_df['Cor'] == 'Preto']
#print(cor)


#cor_df = dados_df.loc[(dados_df['Categoria'] == 'Roupas') & (dados_df['Cor'] == 'Preto')]

print(dados_df.loc[5, 'Código do produto']) #mostra o produto e seu código