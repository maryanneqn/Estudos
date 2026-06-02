<?php
    $anoBissexto = $argv[1];


if (($anoBissexto % 4 == 0 && $anoBissexto % 100 != 0 ) || ($anoBissexto % 400 == 0)) {
    echo "O ano é bissexto!";

} else {
    echo "O ano não é bissexto!";
}