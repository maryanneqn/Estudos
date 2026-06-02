import pyautogui
import time 

time.sleep(5)  # Espera 5 segundos para você posicionar o mouse e rodar o que estar no mouse
pyautogui.dragRel(100, 0, duration=2)  #arrasta o mouse para direita
pyautogui.dragRel(0, 100, duration=2)  #arrasta o mouse para baixo
pyautogui.dragRel(-100, 0, duration=2)  #arrasta o mouse para esquerda
pyautogui.dragRel(0, -100, duration=2)  #arrasta o mouse para cima

pyautogui.dragRel(0, -100, duration=2) 

