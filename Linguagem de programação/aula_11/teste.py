import pyautogui
import time
print (pyautogui.position( )) #posiçao do mouse

# while True:

   # print (pyautogui.position( )) 


#pyautogui.moveTo(1280, 60, duration=2) #move o mouse para a posiçao x e y
#pyautogui.moveTo(592, 57, duration=2)
#pyautogui.moveTo(693, 11, duration=2)
#pyautogui.moveTo(9888, 48, duration=2)


time.sleep(3) #espera 3 segundos
pyautogui.moveTo(1759, 149, duration=2)

pyautogui.click(x= 1759, y= 149) #clica com o mouse

time.sleep(3) #espera 3 segundos
pyautogui.moveTo(1082, 475, duration=2)

pyautogui.click(x= 1082, y= 475)

time.sleep(3) #espera 3 segundos
pyautogui.moveTo(1031, 537, duration=2)


pyautogui.write("Marlieria13") #escreve o que estiver entre aspas

time.sleep(3) #espera 3 segundos
pyautogui.moveTo(1361, 667, duration=2)

pyautogui.click(x= 1361, y= 677)