<?php

class mouse extends perifericos {
    public function __construct(
        string $objeto,
        string $modelo,
        string $conexao
    )
    {
        parent::__construct($objeto,$modelo,$conexao);
    }
}