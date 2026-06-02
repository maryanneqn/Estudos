import pyautogui
import time


pyautogui.press('win') 
pyautogui.write("bloco de notas") 
pyautogui.sleep(3) 
pyautogui.press('enter')
pyautogui.sleep(3)
pyautogui.write("Automatizando com PyAutoGU é divertido!", interval=0.25) 
