<?php

class teclado extends perifericos {
    public function __construct(
        string $objeto,
        string $modelo,
        string $conexao,
        public readonly layout $layout
    )
    {
        parent::__construct($objeto,$modelo,$conexao);
    }
}