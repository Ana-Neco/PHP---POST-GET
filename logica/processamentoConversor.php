
<?php

require "funcoesCalculo.php";

if(!empty($_GET['convnum1']))
{
    $num1 = $_GET['convnum1'];

    if($_GET['selectConversor'] == "A")
    {
        echo "Centimetros para metros";
        echo "<br>";
        $resultado = $num1 ." cm". " = " . CentiMetro($num1);
        echo $resultado . " m";
    }
    else if($_GET['selectConversor'] == "B")
    {
        echo "Metros para centimetros";
        echo "<br>";
        $resultado = $num1 . " m" . " = " . MetroCenti($num1);
        echo $resultado . " Cm";
    }
    else if($_GET['selectConversor'] == "C")
    {
        echo "Metros para quilometros";
        echo "<br>";
        $resultado = $num1 ." m" . " = " . MetroQuilometro($num1);
        echo $resultado . " km";
    }
    else if($_GET['selectConversor'] == "D")
    {
        echo "Quilometros para metros";
        echo "<br>";
        $resultado = $num1 . " km" . " = " . QuilometroMetro($num1);
        echo $resultado . " m";
    }

}

?>