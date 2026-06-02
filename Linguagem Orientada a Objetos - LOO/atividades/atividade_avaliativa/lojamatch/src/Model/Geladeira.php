<?php

class Geladeira extends Produto {
    public function __construct(
        string $nome,
        float $precoBase,
        categoriaEletronico $eletronico,
        public readonly int $qtdMesesGarantia
    
    ){
        parent::__construct($nome, $precoBase, $eletronico);
    }

    public function calcularTaxaEnvio() : float {
        return $this -> qtdMesesGarantia * 50.00;
    }
    



}