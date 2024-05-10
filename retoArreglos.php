<!-- actividad de arrays

opcupacion 
nombre
color 
comidas 
favoritas
no le gusta -->

<!-- escuela de michis -->


<?php

$escuela_Michis = [

    "juan" => [
        'color' => 'vengala',
        
        "comidas" => [

            "favoritas" => [
                'comida 1' => 'pescado'
            ],
            
            "no le gustan" => [
                'comida 1' => 'pollo',
            ]

        ]
    ],

    "garfield" => [

        'color' => 'naranja',

        "comidas" => [
            'favoritas' => [
                'comida 1' => 'lazana'
            ],

            "no le gustan" => [
                'comida 1' => 'verduras'
            ]
        ]

    ],

    "evee" => [

        'color' => 'cafe',

        "comidas" => [
            'favoritas' => [
                'comida 1' => 'ketchup'
            ],

            'no le gustan' => [
                'comida 1' => 'pollo'
            ]
        ] 
    ] 

];


echo 'la comida favorita de garfield es ' .$escuela_Michis['garfield']['comidas']['favoritas']['comida 1'].' y es de color '.$escuela_Michis['garfield']['color'];



?>