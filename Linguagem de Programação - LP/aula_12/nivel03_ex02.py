import pyautogui
import time

pyautogui.press('win') #abre o menu iniciar
pyautogui.write('chrome.exe')
pyautogui.press('enter')#aperta enter
pyautogui.sleep(2),
pyautogui.write('youtube.com')
pyautogui.press('enter')


time.sleep(1) 
pyautogui.moveTo(824, 144, duration=2)
pyautogui.click(x= 824, y= 144)


pyautogui.write("musica relaxante")
pyautogui.press('enter')
