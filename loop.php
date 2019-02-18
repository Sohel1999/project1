<?php
//while loop

/*$i = 1;
$a = 6;

while ($i <= 10){
    echo $a . 'x' . $i. '=' . $a*$i . '</br>';
    $i++;
}*/

//do while loop

/*$i = 1;
$a = 6;
do{
    echo $a . 'x' . $i. '=' . $a*$i . '</br>';
    $i++;
}while($i<=10);*/


//for loop
/*$a=7;
for ($i=1; $i<=10; $i++){
    echo $a . ' x ' . $i. '=' . $a*$i . '</br>';
}*/

//for loop with function

/*function multiplecation($a){
    for ($i=1; $i<=10; $i++){
        echo $a . ' x ' . $i. '=' . $a*$i . '</br>';
    }
    echo '<hr/>';
}
multiplecation(4);
multiplecation(7);
multiplecation(8);
multiplecation(9);*/

$person =[
    'first_name' => 'Jhon',
    'last_name' => 'Doe',
    'age' => '22',
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

function iterate_array($array){
    foreach ($array as $key=>$value){
        if (is_array($value)){
            iterate_array($value);
        } else{
        echo keytotext($key) . ' : ' . $value. '<br/>';
        }
    }
}

function keytotext($key){
    return ucwords(str_replace('_',' ', $key));

}


foreach ($person as $key => $value){
    if (is_array($value)){
        iterate_array($value);
    }else{
        echo keytotext($key) . ' : ' . $value . '<br/>';
    }
}
