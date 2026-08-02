<?php
//ANONYMOUS FUNCTION 
//Anonymous function adalah function tanpa nama, di php disebut dengan closure
// bisa digunaan sebegai argument atau sebgai value di variable

$sayHello = function (string $name)
{
    echo "APA $name" . PHP_EOL; 
}; 
$sayHello("nym");
$sayHello("Badu");

function sayGoodBey (string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good Bye $finalname" . PHP_EOL;
}

sayGoodBey("Eko", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBey("Eko", $filterFunction);


//MENGAKSES VARIABLE DILUAR CLOSURE
$firstName = "Wahyu";
$lastName = "Trisna";

$sayHelloWahyu = function () use ($firstName, $lastName){
    echo "Hello kamu $firstName $lastName" . PHP_EOL;
};

$sayHelloWahyu();


