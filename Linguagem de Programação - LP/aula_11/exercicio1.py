import pyautogui
import time

pyautogui.pause = 0.2 #tempo de espera entre cada comando do pyautogui
pyautogui.press('win') #abre o menu iniciar
pyautogui.write('bloco de notas') #escreve bloco de notas
pyautogui.press('enter')#aperta enter
pyautogui.sleep(2) #espera 2 segundos
pyautogui.write("Mary") #escreve o que estiver entre aspas
pyautogui.sleep(2)
pyautogui.hotkey("ctrl","w") #atalho para fechar o programa
pyautogui.sleep(2)
pyautogui.press('right')#aperta enter
pyautogui.sleep(2)
pyautogui.press('enter')

