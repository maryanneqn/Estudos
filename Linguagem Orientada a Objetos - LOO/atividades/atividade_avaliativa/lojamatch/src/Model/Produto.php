<?php

abstract class Produto {
    public function __construct(
        public readonly string $nome,
        public readonly float $precoBase,
        public readonly categoriaEletronico $eletronico
    )
    {}
abstract public function calcularTaxaEnvio();
}

