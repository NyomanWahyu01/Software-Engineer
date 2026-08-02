<?php

// REFERENCE TERHADAP VARIABLE 
$name = "Adi";

$otherName = &$name;

$otherName = "Budi";

echo $name . PHP_EOL;

// PASS BY REFERENCE
// REFERENCE PARAMETER 
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

// RETURNING REFERENCES
// REFERENCE RETURN VALUE
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 400;

$b = &getValue();
echo $b . PHP_EOL;