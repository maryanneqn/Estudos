import pandas as  pd 

dados_df = pd.read_excel("produtos_ficticios.xlsx")


dados_df['Valor em estoque'] = dados_df['Preço'] * dados_df['Quantidade em estoque']     #cria uma nova coluna chamada de 'valor em estoque'
print(dados_df)


dados_df['Imposto'] = 0     #cria uma nova coluna

print(dados_df)

dados_df.loc[2,'Imposto'] = 4  #substitui a linha indicada, no exemplo, linha 2

print(dados_df)

#dados_df.to_excel("produtos_ficticios2.xlsx", index= 'false')  #salva as novas configurações no excel 

dados_df['Imposto'] = dados_df['Valor em estoque'] * 0.03 

print(dados_df)

dados_df['valor final'] = dados_df['Valor em estoque'] * dados_df['Imposto']

print(dados_df)

dados_df.loc[: , 'status'] = 'Esgotado'

dados_df.loc[dados_df['Quantidade em estoque'] > 0 , 'status'] = 'Disponível'    #cria uma coluna chamada 'status' que verifica a quantidade de estoque se for = 

dados_df.loc[dados_df['Quantidade em estoque'] == 0 , 'Custo médio por unidade'] = 'N/A'

print(dados_df)

dados_df.loc[dados_df['Quantidade em estoque'] > 0 , 'Custo médio por unidade'] = dados_df['Valor em estoque'] / dados_df['Quantidade em estoque']

print(dados_df)

dados_df.loc[dados_df['Categoria'] == 'Roupas', 'Frete'] = 12.90

print(dados_df)

dados_df.loc[dados_df['Categoria'] == 'Acessórios', 'Frete'] = 8.50

print(dados_df)

dados_df.loc[dados_df['Categoria'] == 'Calçados', 'Frete'] = 15.00

print(dados_df)

#dados_df.to_excel("produtos_ficticios2.xlsx", index= 'false')

planilha = dados_df[['Nome do produto', 'Categoria','Código do produto','Preço','Imposto','valor final','status','Custo médio por unidade','Frete']]
print(planilha)
planilha.to_excel("planilha_aula16.xlsx", index= False)
