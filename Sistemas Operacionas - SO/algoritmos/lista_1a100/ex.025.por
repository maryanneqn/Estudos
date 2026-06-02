programa {
  real s1, s2, s3
  funcao inicio() {
    escreva("Digite o tamanho do primeiro seguimento de reta: ")
    leia(s1)
    escreva("Digite o tamanho do segundo seguimento de reta: ")
    leia(s2)
    escreva("Digite o tamanho do terceiro seguimento de reta: ")
    leia(s3)

    se (s1 < s2 + s3 e s2 < s1 + s3 e s3 < s1 + s2){
      escreva("É possível formar um triângulo com essas retas!")
      }
      senao {
        escreva("Não é possível formar um triângulo com essas retas!")
      }
  }
}
