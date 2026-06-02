import pyautogui
import time

pyautogui.press('win') #abre o menu iniciar
pyautogui.write('chrome.exe')
pyautogui.press('enter')#aperta enter
pyautogui.sleep(2) #espera 2 segundos
pyautogui.write("excalidraw.com")
pyautogui.press('enter')
time.sleep(2) 

pyautogui.moveTo(1052, 571, duration=2)

time.sleep(5)  
pyautogui.dragRel(100, 0, duration=2) 
pyautogui.dragRel(0, 100, duration=2)  
pyautogui.dragRel(-100, 0, duration=2)  
pyautogui.dragRel(0, -100, duration=2) 



