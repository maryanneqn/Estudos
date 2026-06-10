<?php

abstract class perifericos {
    public function __construct(
        public readonly string $objeto,
        public readonly string $marca,
        public readonly string $conexao
    )
    {} 
};