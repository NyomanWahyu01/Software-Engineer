<?php
//ARROW FUNCTION
$firstname = "Wahyu";
$lastname = "Dadi";

// jika menggunakan anonymousfunction, ada use serta variabele nya
$anonymousFunction = function () use ($firstname, $lastname) : String {
    return "Hello $firstname $lastname" . PHP_EOL;
};

// menggunakan arrawFunctian, hanya menggunakan fn() dan veriable data
$arrowFunction = fn() => "Hello $firstname $lastname" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();