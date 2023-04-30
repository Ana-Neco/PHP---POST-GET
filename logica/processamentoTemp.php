
<?php


require "funcoesCalculo.php";

$resultado = "";

if(!empty($_POST['tempnum1']))
{
    $num1 = $_POST['tempnum1'];

    if($_POST['selectTemp'] == "Celsius")
    {
        $resultado = $num1 . "°" . " Celsius" . " = " . Fahrenheit($num1);
        echo "Temperatura de " . $resultado . "° Fahrenheit";
    }
    else if($_POST['selectTemp'] == "Fahrenheit")
    {
        $resultado = $num1 . "°" . " Fahrenheit" . " = " . Celsius($num1);
        echo "Temperatura de " . $resultado . "° Celsius";
    }

}

?>