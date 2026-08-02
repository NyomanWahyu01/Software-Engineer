<?php
// CODE : OPERATOR ARRAY
//$a + $b = Union : Menggabungkan Array $a dan $b
//$a == $b = Equality : true jika  $a dan $b memiliki key-value sama 
//$a === $b = Union : true jika  $a dan $b memiliki key-value sama dan posisi sama
//$a != $b = Union : true jika  $a dan $b tidak sama
//$a <> $b = Union : true jika  $a dan $b tidak sama
//$a !== $b = Union : true jika  $a dan $b tidak identik

$first = [
    "first_name" => "Wahyu"
];

$last = [
    "first_name" => "Adi",
    "last_name" => "Trisna"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Wijaya",
    "last_name" => "Trisna"
];

$b = [
    "last_name" => "Trisna",
    "first_name" => "Wijaya"
];
var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
