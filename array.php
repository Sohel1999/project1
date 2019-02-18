<?php

$person =[
    'first_name' => 'Jhon',
    'last_name' => 'Doe',
    'address' =>[
        'city' => 'Dhaka',
        'road' => '4',
        'area' => 'Banani',
        'country' =>[
            'code' => 'BD',
            'full_name' => 'Bangladesh'
        ]
    ]
];

echo $person['first_name'].'</br>';
echo $person['last_name'].'</br>';
echo $person['address']['city'].'</br>';
echo $person['address']['country']['code'] .'</br>';
echo $person['address']['country']['full_name'] .'</br>';


