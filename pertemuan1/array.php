<?php
//array index
$animals=['kambing','kucing','Ayam'];

//Akses Array
foreach ($animals as $animal){
    echo $animal. '<br>';
}

//array assosiatif
$student=[
    'nama'=> 'YassirAmri',
    'major'=> 'information',
    'age' => 20
];

echo $student['nama'];