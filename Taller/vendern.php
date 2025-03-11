<?php
$cantidad=$_POST["cantidad"];
if($cantidad<=0)
{
    echo "Ha digitado un valor incorrecto";
    exit;
}

$tipo = $_POST["tipo"];
if ($tipo=="a")
{
    $valor=6000;
    $chispitas = isset($_POST["chispitas"]) ? 2000 : 0;
    $llevar = isset($_POST["llevar"]) ? 1000 : 0;
    $total  = ($valor+$chispitas+$llevar)*$cantidad;

    echo "Total a pagar: $". $total;
}

if ($tipo=="b")
{
    $valor=10000;
    $chispitas = isset($_POST["chispitas"]) ? 2000 : 0;
    $llevar = isset($_POST["llevar"]) ? 1000 : 0;
    $total  = ($valor+$chispitas+$llevar)*$cantidad;

    echo "Total a pagar: $". $total;
}

if ($tipo=="c")
{
    $valor=20000;
    $chispitas = isset($_POST["chispitas"]) ? 2000 : 0;
    $llevar = isset($_POST["llevar"]) ? 1000 : 0;
    $total  = ($valor+$chispitas+$llevar)*$cantidad;

    echo "Total a pagar: $". $total;
}
?>

