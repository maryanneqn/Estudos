<?php

class CalculadoraDeFrete{
    private float $totalFrete = 0;

    public function calcularFrete(Produto $produto): void
    {
        $this -> totalFrete += $produto -> calcularTaxaEnvio();
    }

    public function getTotal(): float
    {
        return $this->totalFrete;
    }
}