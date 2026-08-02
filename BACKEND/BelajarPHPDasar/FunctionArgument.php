<?php
//FUNCTION ARGUMENT
// tipe data function ini termasuk dinamis dan gampang di rubah-rubah

// function sayHello($name)
// {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello("Nyoman");
// sayHello("badi");


//Defaul Argument Value
// function sayHello($name = "Anonymouse")
// {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello();
// sayHello("badi");
// sayHello("hayu");

//Kelasahan Default Argument Value
// function sayHello($firstName, $lastName = "")
// {
//     echo "Hello $firstName $lastName" . PHP_EOL;
// }

// sayHello("badi");
// sayHello("hayu");
// sayHello("badu", "sisi");

//Type Declaration
// VALID TYPE =
// class / interface = parameter harus tipe class / interface
// self = parameter harus sama dengan class dimana function ini dibuat
// array = parameter harus array
// callable = parameter harus callable 
// bool = parameter haru boolean 
// float = parameter harus floating point

// function sum(int $first, int $last)
// {
//     $total = $first + $last;
//     echo "total nilai $first + $last = $total" . PHP_EOL;
// }
// sum(100,100);
// sum("100","100");
// sum("true","false");

//Variable-length Argument List
// function sumAll(...$values)
// {
//     $total = 0;
//     foreach ($values as $value){
//         $total += $value;
//     }
//     echo "total " . implode(",", $values) . " = $total" . PHP_EOL;
// }
// $values = [1,2,3,4,5];

// sumAll(1, 2, 3, 4, 5);
// sumAll(...$values);

