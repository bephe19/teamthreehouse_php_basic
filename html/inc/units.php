<?php

// Fahrenheit to celcius
// Rumus ( niliai celcius * 9/5) +32
// Parameter function int celcius
// invoke function celcius to fahreinheit(12); // print 53,6 

function celciusToFahrenheit($celcius)
{
    $conversi=($celcius * 9/5)+32;

    echo "$celcius celcius = $conversi fahrenheit";
}

celciusToFahrenheit(80);







?>