import pandas as pd

df = pd.read_csv('titanic.csv')


print(df.head())  # Exibe as primeiras linhas do DataFrame
print(df.describe())  # Exibe estatísticas descritivas do DataFrame
print(df.info())  # Exibe informações sobre o DataFrame