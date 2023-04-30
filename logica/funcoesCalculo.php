<?php


function adicao($num1, $num2)
{
    $calculo = $num1 + $num2;
    return $calculo;
}

function subtracao($num1,$num2)
{
    $calculo = $num1 - $num2;
    return $calculo;
}

function multi($num1,$num2)
{
    $calculo = $num1 * $num2;
    return $calculo;
}

function divisao($num1,$num2)
{
    $calculo = $num1 / $num2;
    return $calculo;
}

function Fahrenheit($num1)
{
    $calculo = $num1 * (9/5) + 32;
    return number_format($calculo,1,',','');
}

function Celsius($num1)
{
    $calculo = ($num1 - 32) * (5 / 9);
    return number_format($calculo,1,',','');
}

function CentiMetro($num1)
{
    $calculo = $num1 / 100;
    return $calculo;
}

function MetroCenti($num1)
{
    $calculo = $num1 * 100;
    return $calculo;
}

function MetroQuilometro($num1)
{
    $calculo = $num1 / 1000;
    return $calculo;
}

function QuilometroMetro($num1)
{
    $calculo = $num1 * 1000;
    return $calculo;
}



?>