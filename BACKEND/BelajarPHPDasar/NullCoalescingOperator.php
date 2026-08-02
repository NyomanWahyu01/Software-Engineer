<?php
// NULL COALESCING OPERATOR
//Data kosong di presentasikan dengan data NULL di PHP dan hal paling report di php adalaj mengecek apakah sebuah data ada / tidak
//Biasanya untuk melakukan itu bisa mengecek if statement dengan funtion isset($variable)
//Namun di php ada null coalescing operator menggunakan danda ??

$data =[
    "action" => null
];

// if (isset($data["action"])){
//         $action = $data ["action"];
// }else{
//     $action = "nothing";
// }

// echo $action . PHP_EOL;

$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;


