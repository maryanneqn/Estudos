import pyautogui
import time

pyautogui.press('win') #abre o menu iniciar
pyautogui.write('chrome.exe')
pyautogui.press('enter')#aperta enter
pyautogui.sleep(2) #espera 2 segundos
pyautogui.write("excalidraw.com")
pyautogui.press('enter')
time.sleep(2) 


x = 500   
y = 400   

for i in range(3):
    pyautogui.moveTo(x + i*120, y)  
    pyautogui.click()

    pyautogui.dragRel(100, 0, 1)   
    pyautogui.dragRel(0, 100, 1)   
    pyautogui.dragRel(-100, 0, 1)  
    pyautogui.dragRel(0, -100, 1)