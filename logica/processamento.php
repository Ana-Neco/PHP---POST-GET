<?php

require "funcoesCalculo.php";

if(!empty($_GET['inputnum1']) && !empty($_GET['inputnum2']))
{
    $num1 = $_GET['inputnum1'];
    $num2 = $_GET['inputnum2'];

    if($_GET['selectOperacoes'] == "adicao")
    {
        $resultado = $num1 . " + " . $num2 . " = " . adicao($num1,$num2);
    }
    else if($_GET['selectOperacoes'] == "subtracao")
    {
        $resultado = $num1 . " - " . $num2 . " = " . subtracao($num1,$num2);
    }
    else if($_GET['selectOperacoes'] == "multi")
    {
        $resultado = $num1 . " * " . $num2 . " = " . multi($num1,$num2);
    }
    else if($_GET['selectOperacoes'] == "divisao")
    {
        $resultado = $num1 . " / " . $num2 . " = " . divisao($num1,$num2);
    }

}

echo "RESULTADO: " . $resultado;

?>