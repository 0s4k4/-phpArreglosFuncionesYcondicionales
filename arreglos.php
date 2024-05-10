<?php

$edades = [18,20,40];

//se declara variable
//son un echo se impprime el arreglo y la posicion a imprimir
echo 'una de las edades son'.$edades[1];

echo '<br>';
//de esta manera podemos imprimnir el arreglo completo
print_r($edades);
echo '<br>';

///y de esta manera podemos imprimir con un foreach o bucle todos los elementos de nuestro arreglo

foreach ($edades as $edad) {
    

    echo '<br>';
    echo $edad;
}




?>