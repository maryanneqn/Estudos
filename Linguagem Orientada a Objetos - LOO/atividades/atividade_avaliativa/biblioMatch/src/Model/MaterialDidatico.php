<?php

abstract class MateriaDidatico {
    public function __construct(
        public readonly string $titulo,
        public readonly int $anoPublicacao,
        public readonly EstadoConservacao $conservacao
    )
    {}

    abstract public function calcularDiasEmprestimo(): int;

}