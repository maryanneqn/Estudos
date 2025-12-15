import pyautogui
import time

pyautogui.PAUSE = 0.5

pyautogui.hotkey('win', 'r')
time.sleep(1)

pyautogui.write('notepad')
pyautogui.press('enter')

time.sleep(1)

pyautogui.write('Ola, este texto foi digitado automaticamente!', interval=0.07)