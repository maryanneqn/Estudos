programa {
  real metros, km, hm, dam, dm, cm, mm
  funcao inicio() {
    escreva("Digite uma distância em metros: ")
    leia(metros)
    escreva("A distância de ",metros,"m corresponde a: \n")
    km = metros / 1000
    hm = metros / 100
    dam = metros /10
    dm = metros * 10
    cm = metros * 100
    mm = metros * 1000

    escreva(km ,"km\n")
    escreva(hm, "hm\n")
    escreva(dam, "dam\n")
    escreva(dm, "dm\n")
    escreva(cm, "cm\n")
    escreva(mm, "mm")
    
  }
}
