import pyautogui

pyautogui.alert(text = 'Iniciando automação.', title = 'Automação de login', button = 'Ok')
email = pyautogui.prompt(text = 'Digite seu email:', title = 'Informações obrigatórias:')
print(f"Seu email: {email}")
resposta = pyautogui.confirm(text = 'Continuar rodando nossa automação?', title='Confirmação', buttons = ['sim' , 'não' , 'cancelar'])
print(resposta)
