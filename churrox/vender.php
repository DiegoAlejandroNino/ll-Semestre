<?php
$cantidad=$_POST["cant"];
if($cantidad<=0)
{
    echo "Ha digitado un valor incorrecto";
    exit;
}

$tipo=$_POST["tipo"];
if ($tipo == 1)
{
    $valor=3000;
    $subtotal = $valor*$cantidad;
    if ($subtotal>50000)
    {
        $final = $subtotal - ($subtotal*0.15);
        print "El total a pagar es de: ".$final;
    }else{
        echo $subtotal;
    }
}

if ($tipo == 2)
{
    $valor=3500;
    $subtotal = $valor*$cantidad;
    if ($subtotal>50000)
    {
        $final = $subtotal - ($subtotal*0.15);
        print "El total a pagar es de: ".$final;
    }else{
        echo $subtotal;
    }
}

if ($tipo == 3)
{
    $valor=4000;
    $subtotal = $valor*$cantidad;
    if ($subtotal>50000)
    {
        $final = $subtotal - ($subtotal*0.15);
        print "El total a pagar es de: ".$final;
    }else{
        echo $subtotal;
    }
}
?>