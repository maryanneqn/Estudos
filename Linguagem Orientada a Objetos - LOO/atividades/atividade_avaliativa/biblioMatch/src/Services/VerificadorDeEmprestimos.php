<?php

class VerificadorDeEmprestimos
{
    private float $totalEmprestimo = 0;

    public function tempoEmprestimo(MateriaDidatico $material) : void
    {
        $this->totalEmprestimo += $material-> calcularDiasEmprestimo();
    }

    public function getTotal(): float{
        return $this->totalEmprestimo;
    }
}