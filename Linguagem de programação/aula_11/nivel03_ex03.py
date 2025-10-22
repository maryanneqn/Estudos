import pyautogui
import time

pyautogui.press('win') #abre o menu iniciar
pyautogui.write('bloco de notas')
pyautogui.press('enter')#aperta enter
pyautogui.sleep(2) #espera 2 segundos
pyautogui.write("Ola, qual seu nome", interval=0.25)
pyautogui.hotkey("enter") 
pyautogui.write("Prazer em conhece-lo!", interval=0.25)
pyautogui.hotkey("enter") 
pyautogui.write("Eu me chamo Mary Anne.", interval=0.25)

pyautogui.hotkey("ctrl","s") #atalho para salvar o arquivo
pyautogui.sleep(2)

pyautogui.write("anotacao.txt ", interval=0.25)

time.sleep(1) 
pyautogui.moveTo(242, 320, duration=2)
pyautogui.click(x= 242, y= 320)
pyautogui.sleep(2)
pyautogui.press('enter')#aperta enter para salvar o arquivo
pyautogui.moveTo(927, 636, duration=2)
pyautogui.click(x= 927, y= 636)
