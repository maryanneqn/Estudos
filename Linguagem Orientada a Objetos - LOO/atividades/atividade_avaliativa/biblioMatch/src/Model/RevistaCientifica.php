<?php

class RevistaCientifica extends MateriaDidatico {
    public function __construct(
        string $titulo,
        int $anoPublicacao,
        EstadoConservacao $conservacao,
        public readonly int $qtdArquivos
    )
    {
        parent:: __construct($titulo, $anoPublicacao, $conservacao);
    }

    public function calcularDiasEmprestimo(): int
    {
        return $this-> qtdArquivos * 2;
    }
}