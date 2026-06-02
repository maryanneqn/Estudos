<?php
require __DIR__ . "/src/model/Genero.php";
require __DIR__ . "/src/model/Titulo.php";
require __DIR__ . "/src/model/Serie.php";
require __DIR__ . "/src/model/Filme.php";

echo "Bem-vindo ao Screen Match!\n";

$filme1 = new Filme(
    'Thor Ragnarok',
    2021,
    Genero::Superheroi,
    120
);


$serie1 = new Serie(
    'Bad Boys',
    2011,
    Genero::Acao,
    3,
    10,
    60
);

$serie1-> avaliar(10);
$serie1-> avaliar(8);




var_dump($serie1);
echo $serie1-> media();