<?php
// Local Scope

function createName()
{
    global $name; //global keyword
    $name = "nyoman";
}

createName();
echo "hello $name" . PHP_EOL;