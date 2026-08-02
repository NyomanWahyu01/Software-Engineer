<?php
//variable function adalah kemapuan memanggil sebuah function dari value yang terdapat di sebuah variable 
//guna menggunakan variable function bisa memanggil $namaVariable()

function foo()
{
    echo "hallo Foo" . PHP_EOL;
}
function bar()
{
    echo "hallo Bar" . PHP_EOL;
}

$functionyangdipanggil = "foo";
$functionyangdipanggil (); //eksekusi foo
$functionyangdipanggil = "bar";
$functionyangdipanggil (); //eksekusi foo

//PENGGUNAAN VARIABLE FUNCTION
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string{
    return  "sample $name";
}
sayHello("Eko", "sampleFunction");
sayHello("Eko", "strtoupper()");
sayHello("Eko", "strtolower()");

