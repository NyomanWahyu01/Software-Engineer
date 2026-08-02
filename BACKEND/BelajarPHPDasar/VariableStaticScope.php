<?php

// STATIC SCOPE
function increment()
{
    static $counter = 1; //static scope
    echo "Counter = $counter". PHP_EOL; //print output
    $counter++; // angka di naikkan 
}

increment();
increment();
increment();
increment();
increment();
increment();