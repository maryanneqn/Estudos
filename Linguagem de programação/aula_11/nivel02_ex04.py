import pyautogui
import time


time.sleep(3)


pyautogui.scroll(-500) 
time.sleep(2)            


pyautogui.scroll(500)   
time.sleep(2)           


for i in range(3):
    pyautogui.scroll(-500)
    time.sleep(1)
    pyautogui.scroll(500)
    time.sleep(1)