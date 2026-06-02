import pyautogui
import time


pyautogui.press('win') #abre o menu iniciar
pyautogui.write('chrome.exe') #escreve bloco de notas
pyautogui.press('enter')#aperta enter
pyautogui.sleep(2) #espera 2 segundos
pyautogui.write("wikipedia.org")
pyautogui.press('enter')