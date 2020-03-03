<?php

//$pasteles = array('chocolate', 'manzana', 'fresa');

use Illuminate\Database\Console\Migrations\FreshCommand;

$chocolate = "Soy un pastel de Chocolate";
$manzana = "Viva el sabor de la manzana";
$fresa = "La fresa no es el fruto del amor preo casi";
$cosas = ["cosa1", "cosa myuy", "jarabe"];

//$pasteles = ["chocolate" => $chocolate, "manzana" => $manzana, "fresa" => $fresa];
$pasteles = compact('chocolate', 'manzana', 'fresa', "cosas");
var_dump($pasteles);
echo $pasteles['chocolate'];
echo '<hr>';

function imprimePasteles($array_de_pasteles){

    //imprime pasteles
    foreach($array_de_pasteles as $clave => $pastel){
        echo $clave."    ".$pastel. '<br>';
    }
  
}

imprimePasteles($pasteles);
echo '<hr>';

imprimePasteles(['coco', 'galletas']);