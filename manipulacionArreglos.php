<?php
$edades = [10,22,40,34];


//count

// echo count($edades);


// echo '<br>';

//array push  es para agregar elemento

array_push($edades,13);


// var_dump($edades);


//is_array saber si es un arreglo

// $noArreglo = '';

// var_dump(is_array($noArreglo));
// echo '<br>';
// var_dump(is_array($edades));


//EXPLODE, ES PARA CONVERTIR EN string a UN ARREGLO
// $lista_de_frutas = 'fresa,manzana,limon';

// $lista_de_frutasArreglo = explode(",",$lista_de_frutas);


// var_dump($lista_de_frutasArreglo);


//implode, es para convertir arreglo a string

$lista_juegosA = ['mario rpg','pokemon red'];
$lista_juegos = implode(',',$lista_juegosA);

var_dump($lista_juegos);

?>