<?php
// ARRAY FUNCTION

// EXLAMPLE ARRAY FUNCTION
// array_keys() = mengambil semua keys milik array
// array_values() = mengambil semua velues milik array 
// array_map() = mengubah data data array dengan callback
// sort() = mengurutkan array
// rsort() = mengurutkan array terbalik
// shuffle() = mengubah posisi data di array secara random

$data = [1,2,3,4,5,6,7,8,9,10];

// formatnya = Scending adalah mengurutkan data terkecil ke terbesar
// $mapFunction = fn(int $value) => $value * 10;
// $dataResult = array_map($mapFunction, $data);
// var_dump($dataResult);

// simplenya
$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

// RSORT = Descending Mengurutkan data dari nilai terbesar ke terkecil
rsort($data);
var_dump($data);

// KEYS & ARRAY
var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "Nyoman",
    "last_name" => "Wahyu"
];

var_dump(array_keys($person));
var_dump(array_values($person));