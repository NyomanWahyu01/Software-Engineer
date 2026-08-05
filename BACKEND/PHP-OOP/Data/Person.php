<?php
/* 
VARIABLE CLASS

membuat class kita harus menggunakan kata kunci "class"
menggunakan format CamelCase
*/

// CLASS & PROPERTIES
class Person 
{
    const AUTOR = "Software Engineer - I Nyoman Wahyu";

    var string $name; // PROPERTIES TYPE DECLARATION
    var ?string $address = null; //nullabel properties variable value
    var string $country = "indonesia"; //defult value pada properties

// CONSTRUCTOR
function __construct(string $name, ?string $address)
{
    $this->name = $name;
    $this->address = $address;
}

// FUNCTION
function sayHello(string $name)
{
    if(is_null($name)) {
        echo "Hi, My Name is $this->name" . PHP_EOL;
    }else {
        echo "Hi $name, My Name is $this->name" . PHP_EOL;
    }
}

// SELF KEYWORD
function info()
{
    echo "Author : " . self::AUTOR . PHP_EOL; 
}

// DESTURCTOR 
function __destruct()
{
    echo "Object person $this->name is destroyed" . PHP_EOL;
}

}


