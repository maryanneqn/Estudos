<?php

class Smartphone extends Produto {
    public function __construct(
    string $nome,
    float $precoBase,
    categoriaEletronico $eletronico,
    public readonly int $qtdAcessorios
    )
    {
        parent::__construct($nome, $precoBase, $eletronico);
    }

    public function calcularTaxaEnvio() : float {
        return $this -> qtdAcessorios * 15.00;
    }
}