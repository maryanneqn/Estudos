import pandas as pd
dados_df = pd.read_excel("produtos_ficticios.xlsx")

# Liste os produtos fabricados na China com estoque acima de 50 unidades

produtos = dados_df.loc[(dados_df['País de origem'] == 'China') & (dados_df['Quantidade em estoque'] > 50)]
print(produtos)