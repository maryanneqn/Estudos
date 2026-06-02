import pyautogui
import time

im1 = pyautogui.screenshot(region=(360,499,320,530))  #x,y,largura,altura
im1.save('imagem2.png')