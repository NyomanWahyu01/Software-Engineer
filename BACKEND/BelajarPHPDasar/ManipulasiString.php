<?php
// CODE : DOT OPERATOR 
//Dot Operator adalah oprator yang bisa kita gunakan untuk menambahkan string dengan data lain
//(bisa string / type data lainnya)

//cara lama
$name = "Nyoman Wahyu";

echo "Name :";
echo $name;
echo "\n";

//Dot oporator
$name = "Nyoman Wahyu";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// CODE : CONVERSI KE NUMBER DAN SEBALIKNYA
$valueString = (string)100; // String 
var_dump($valueString);

$valueInt = (int)"100"; // Integer Number
var_dump($valueInt);

$valueFloat = (float)"1.01"; // Floating point
var_dump($valueFloat);

//CODE : MENGAKSES KARAKTER
$name = "Adi";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

// CODE : VARIABLE PARSING
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL; 
echo "Hello $name,  Selamat Belajar PHP" . PHP_EOL; 

//CODE : CURLY  BRACE 
// Memanipulasi data string
$var = "Mant";
echo "This is {$var}s" . PHP_EOL;

