<?php
// factorialLoop
function factorialLoop(int $value): int
{
    $total = 1; 

    for ($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));
var_dump(1*2*3*4*5);

// factorialRecursive
function factorialRecursive(int $value): int
{
    if($value == 1){
        return 1;
    }else{
        return $value * factorialRecursive($value - 1);
    }

}

var_dump(factorialRecursive(5));

// PROSES FACTORIAL RECURSIVE, dan akan terus-terus memanggil ke dalam. serta akan bikin full memori
// factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3) * factorialRecursive(2) * factorialRecursive(1)

// EROR StackOverFlow
function loop(int $value)
{
    if($value == 0){
        echo "end loop" . PHP_EOL;
    }else {
        echo "loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(10);
loop(10000000);  //tes kapasitas 
