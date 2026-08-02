<?php

//global scope
$name = "wahyu"; 

function sayHello ()
{
    global $name; // global keyword
    echo $name . PHP_EOL;

    //["name"] = key 
    echo $GLOBALS["name"] . PHP_EOL;
}

sayHello();


