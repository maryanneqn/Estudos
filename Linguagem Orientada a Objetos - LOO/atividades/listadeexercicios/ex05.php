<?php
    $tempCelsius = $argv[1];

    $tempFahrenheit = ($tempCelsius * 1.8) + 32;

    echo "A temperatura em Fahrenheit é: $tempFahrenheit °F";