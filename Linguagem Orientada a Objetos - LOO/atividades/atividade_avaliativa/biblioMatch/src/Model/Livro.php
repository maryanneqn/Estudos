<?php

class Livro extends MateriaDidatico {
    public function __construct(
        string $titulo,
        int $anoPublicacao,
        EstadoConservacao $conservacao,
        public readonly int $qtdPaginas
    )
    {
        parent:: __construct($titulo, $anoPublicacao, $conservacao);
    }

    public function calcularDiasEmprestimo(): int
    {
        return $this-> qtdPaginas / 50;
    }
}